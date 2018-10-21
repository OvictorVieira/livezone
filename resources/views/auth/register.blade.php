@extends('layouts.logReg-app')

@section('content')
    <div class="limiter masthead h-auto">
        <div class="background-image-fade"></div>
        <div class="container-login100 w-50">
            <div class="wrap-login100 p-l-85 p-r-85 p-t-50 p-b-50">
                <form action="" method="post" class="login100-form validate-form flex-sb flex-w">
                    {{ csrf_field() }}
					<span class="login100-form-title p-b-32">
						Registrar
					</span>

                    <span class="txt1 p-b-11">
						Nome
					</span>
                    <div class="wrap-input100 validate-input m-b-36" data-validate = "É necessário informar o seu nome">
                        <input class="input100" type="text" name="first_name" id="first_name" value="{{ old('name') }}">
                        <span class="focus-input100"></span>
                    </div>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif

                    <span class="txt1 p-b-11">
						Email
					</span>
                    <div class="wrap-input100 validate-input m-b-36" data-validate = "É necessário informar o seu e-mail">
                        <input class="input100" type="email" name="email" value="{{ old('email') }}">
                        <span class="focus-input100"></span>
                    </div>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                    <span class="txt1 p-b-11">
						Senha
					</span>
                    <div class="wrap-input100 validate-input m-b-12" data-validate = "É necessário informar sua senha">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
                        <input class="input100" type="password" name="password" value="{{ old('password') }}">
                        <span class="focus-input100"></span>
                    </div>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                    <span class="txt1 p-b-11">
						Confirme sua Senha
					</span>
                    <div class="wrap-input100 validate-input m-b-12" data-validate = "É necessário informar sua senha novamente">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
                        <input class="input100" type="password" name="password_confirmation" id="password_confirmation">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-b-48 justify-content-end">
                        <div>
                            <a href="{{ route('login') }}" class="txt3">
                                Já possui uma conta?
                            </a>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Registrar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection