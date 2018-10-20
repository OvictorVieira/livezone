$('#cep').change(function () {

    var mudou = true;

    if(($('#address').val() == '' || $('#address').val() == null ) || mudou){

        mudou = false;

        var cep_old = $('#cep').val();

        var cep_unmask = $('#cep').unmask().val();

        var cep = cep_unmask || '';
        if(!cep) {
            $('#cep').val('');
        }
        else{

            $('#loader').css('display','block');
            $('#tour-bg').css('display','block');

            var url = 'https://viacep.com.br/ws/' + cep + '/json';

            $.getJSON(url, function (data) {
                if(data.erro) {
                    $('#loader').css('display','none');
                    $('#tour-bg').css('display','none');
                    alert('Erro ao buscar dados, verifique o CEP digitado e tente novamente.')
                }

                $('#cep').val(cep_old);
                $('#address').val(data.logradouro);
                $('#city').val(data.localidade + ', ' + data.uf);

                $('#loader').css('display','none');
                $('#tour-bg').css('display','none');
                $('#number').val('');
                $('#number').focus();

            });
        }

    }
});