@extends('layouts.login')

@section('content')
<div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-login m-login--signin  m-login--5" id="m_login" style="background-image: url(assets/app/media/img//bg/bg-3.jpg);">
        <div class="m-login__wrapper-1 m-portlet-full-height">
            <div class="m-login__wrapper-1-1">
                <div class="m-login__contanier">
                    <div class="m-login__content">
                        <div class="m-login__logo">
                            <a href="#">
                                <img src="assets/app/media/img//logos/logo-2.png">
                            </a>
                        </div>
                        <div class="m-login__title">
                            <h3>
                                JOIN OUR GREAT METRO COMMUNITY GET FREE ACCOUNT
                            </h3>
                        </div>
                        <div class="m-login__desc">
                            Amazing Stuff is Lorem Here.Grownng Team
                        </div>
                        <div class="m-login__form-action">
                            <a href="/register" class="btn btn-outline-focus m-btn--pill">
                                Get An Account
                            </a>
                        </div>
                    </div>
                </div>
                <div class="m-login__border">
                    <div></div>
                </div>
            </div>
        </div>
        <div class="m-login__wrapper-2 m-portlet-full-height">
            <div class="m-login__contanier">
                <div class="m-login__signin">
                    <div class="m-login__head">
                        <h3 class="m-login__title">
                            Login To Your Account
                        </h3>
                    </div>

                    <form class="m-login__form m-form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        @if(session()->has('login_error'))
                        <div class="alert alert-success">
                            {{ session()->get('login_error') }}
                        </div>
                        @endif
                        <div class="form-group{{ $errors->has('identity') ? ' has-error' : '' }} m-form__group">
                            <div class="form-group m-form__group">
                                <input class="form-control m-input" id="identity" type="identity" placeholder="Username" name="identity" autocomplete="off" value="{{ old('identity') }}" autofocus>
                                @if ($errors->has('identity'))
                                <span class="help-block">
                                                    <strong>{{ $errors->first('identity') }}</strong>
                                                </span>
                                @endif
                            </div>                               
                        </div>
                        <div class="form-group m-form__group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <input class="form-control m-input m-login__form-input--last" id="password" type="password" placeholder="Password" name="password">
                            @if ($errors->has('password'))
                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                            @endif
                        </div>
                        <div class="row m-login__form-sub">
                            <div class="col m--align-left">
                                <label class="m-checkbox m-checkbox--focus">
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                                    Remember me
                                    <span></span>
                                </label>
                            </div>
                            <div class="col m--align-right">
                                <a href="{{ route('password.request') }}" class="m-link">
                                    Forget Password ?
                                </a>
                            </div>
                        </div>
                        <div class="m-login__form-action">
                            <button class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air" type="submit">
                                Sign In
                            </button>
                        </div>                             
                    </form>                            
                </div>
                <div class="m-login__signup">
                    <div class="m-login__head">
                        <h3 class="m-login__title">
                            Sign Up
                        </h3>
                        <div class="m-login__desc">
                            Enter your details to create your account:
                        </div>
                    </div>
                    <form class="m-login__form m-form" action="">
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="text" placeholder="Fullname" name="fullname">
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off">
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="password" placeholder="Password" name="password">
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Confirm Password" name="rpassword">
                        </div>
                        <div class="m-login__form-sub">
                            <label class="m-checkbox m-checkbox--focus">
                                <input type="checkbox" name="agree">
                                I Agree the
                                <a href="#" class="m-link m-link--focus">
                                    terms and conditions
                                </a>
                                .
                                <span></span>
                            </label>
                            <span class="m-form__help"></span>
                        </div>
                        <div class="m-login__form-action">
                            <button id="m_login_signup_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
                                Sign Up
                            </button>
                            <button id="m_login_signup_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
                <div class="m-login__forget-password">
                    <div class="m-login__head">
                        <h3 class="m-login__title">
                            Forgotten Password ?
                        </h3>
                        <div class="m-login__desc">
                            Enter your email to reset your password:
                        </div>
                    </div>
                    <form class="m-login__form m-form" action="">
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
                        </div>
                        <div class="m-login__form-action">
                            <button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
                                Request
                            </button>
                            <button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom ">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection