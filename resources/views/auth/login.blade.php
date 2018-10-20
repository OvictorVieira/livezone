@extends('layouts.logReg-app')

@section('content')

    <div class="limiter masthead h-auto">
        <div class="container-login100">
            <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                <form action="{{ route('login') }}" method="post" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
						Login
					</span>

                    <span class="txt1 p-b-11">
						Email
					</span>
                    <div class="wrap-input100 validate-input m-b-36{{ $errors->has('email') ? ' has-error' : '' }}" data-validate = "É necessário informar o seu e-mail">
                        {{ csrf_field() }}
                        <input class="input100" type="email" name="email" value="{{ old('email') }}">
                        <span class="focus-input100"></span>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <span class="txt1 p-b-11">
						Senha
					</span>
                    <div class="wrap-input100 validate-input m-b-12" data-validate = "É necessário informar sua senha">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
                        <input class="input100{{ $errors->has('password') ? ' has-error' : '' }}" type="password" name="password" value="{{ old('password') }}">
                        <span class="focus-input100"></span>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="flex-sb-m w-full p-b-48">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" {{ old('remember') ? 'checked' : '' }}>
                            <label class="label-checkbox100" for="ckb1">
                                Lembre-se
                            </label>
                        </div>

                        <div>
                            <a href="{{ route('password.request') }}" class="txt3" style="display: none;">
                                Esqueceu sua senha?
                            </a>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Entrar
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
