<footer id="informations">
    <div class="container footer-main">
        <div class="row">
            <div class="col-sm-3 text-left footer-info">
                <div class="image-logo-box-footer d-flex align-items-start">
                    <img class="image-logo footer-logo" src="{{ asset('images/utilities/logo.png') }}">
                </div>
                <p>
                    Nossa ferramenta é focada em facilitar a busca por artistas para um evento,
                    fazendo com que você se preocupe somente em contratar o artista com melhor qualificação
                    e estilo que você precisa.
                </p>
                <ul class="footer-social-list">
                    <li>
                        <a href="#"><i class="fab fa-facebook-f fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-linkedin-in fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-3 text-left footer-info footer-contact">
                <h4>Contato</h4>
                <p>
                    Marília, SP
                    <br> Brasil
                    <br>
                </p>
                <p>
                    <a class="text-body" href="mailto:overplay@gmail.com">contato_livezone@gmail.com</a>
                    <br> Telefone: (14) 0000-0000
                    <br> Whatsapp: (14) 0 0000-0000
                </p>
            </div>
            <div class="col-sm-2 text-left footer-info footer-site-links">
                <h4>Navegação</h4>
                <ul class="list-links">
                    <li><a href="#features" class="js-scroll-trigger">Funcionalidades</a></li>
                    <li><a href="#team" class="js-scroll-trigger">Nosso Time</a></li>
                    <li><a href="#informations" class="js-scroll-trigger">Mais Informações</a></li>
                </ul>

            </div>
            <div class="col-sm-4 text-left footer-info footer-subscribe">

                <h4>Entre em contato</h4>

                <p>Estamos a disposição para esclarecer suas dúvidas.</p>

                <div id="messege-sucess">
                    <div class="alert alert-success alert-custom" role="alert">
                        Mensagem enviada com sucesso.
                    </div>
                </div>
                <div id="messege-fail">
                    <div class="alert alert-warning" role="alert">
                        Insira um email válido.
                    </div>
                </div>

                <div class="subscribe-form">

                    <form id="mc-form" class="group" novalidate="true">

                        <input type="email" value="" name="email" class="email" id="mc-email" placeholder="E-mail" required="">

                        <input type="submit" name="subscribe" class="subscribe" value="Enviar" onclick="alert('Mensagem Enviada, aguarde o nosso retorno.')" autocomplete="off">

                        <label for="mc-email" class="subscribe-message"></label>

                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="container footer-bottom">
        <span class="copyright-footer">© Copyright Nome da Empresa <?php echo date('Y') ?>. All rights reserved.</span>
    </div>
</footer>