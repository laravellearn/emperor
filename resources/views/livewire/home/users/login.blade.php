@section('title','ورود')
<div>
    <div id="main">
        <div class="col-lg-4 col-md-6 col-xs-12 mx-auto">
            <div class="account-box">
                <a href="{{ route('home') }}" class="logo-account"><img src="{{ asset('home/images/logo-login.png') }}" alt="logo"></a>
                <span class="account-head-line" style="text-align:center">ورود</span>
                <div class="content-account">
                    <hr>
                    <form wire:submit.prevent='LoginForm' id="login">
                        @include('errors.error')

                        <label for="mobile">شماره موبایل:</label>
                        <input type="text" id="mobile" wire:model.defer="mobile" class="input-email-account" placeholder="">
                        <label for="password">رمز عبور:</label>
                        <input type="password" id="password" wire:model.defer="password" class="input-password" placeholder="">
                        <div class="parent-btn">
                            <button class="dk-btn dk-btn-info" type="submit">
                                ورود
                                <i class="fa fa-sign-in sign-in"></i>
                            </button>
                        </div>
                        <a href="password-forget.html" class="account-link-password">رمز خود را فراموش کرده ام</a>

                        <div class="form-auth-row">
                            <label for="remember" class="ui-checkbox">
                                <input type="checkbox" value="1" name="login" checked="" id="remember">
                                <span class="ui-checkbox-check"></span>
                            </label>
                            <label for="remember" class="remember-me">مرا به خاطر داشته باش</label>
                        </div>
                    </form>
                </div>
                <div class="account-footer">
                    <span>کاربر جدید هستید؟</span>
                    <a href="{{ route('register') }}" class="btn-link-register">ثبت نام</a>
                </div>
            </div>
        </div>
    </div>
</div>
