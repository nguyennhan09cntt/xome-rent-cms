@extends('layouts.login')

@section('content')
<div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-login m-login--signup  m-login--5" id="m_login" style="background-image: url(assets/app/media/img//bg/bg-3.jpg);">
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
                            <a href="/login" class="btn btn-outline-focus m-btn--pill">
                                Login
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
                <div class="m-login__signup">
                    <div class="m-login__head">
                        <h3 class="m-login__title">
                            Sign Up
                        </h3>
                        <div class="m-login__desc">
                            Enter your details to create your account:
                        </div>
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                           {{ session()->get('message') }}
                        </div>
                        @endif
                    </div>
                    <form class="m-login__form m-form" action="{{ route('register') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="text" placeholder="Fullname" name="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="text" placeholder="Username" name="{{ old('username') }}" autocomplete="off" required>
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="text" placeholder="Email" name="{{ old('email') }}" autocomplete="off" required>
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="password" placeholder="Password" name="password">
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Confirm Password" name="password_confirmation"  id="password-confirm">
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
                            <button id="m_login_signup_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air" type="submit">
                                Sign Up
                            </button>
                            <a href="/" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection