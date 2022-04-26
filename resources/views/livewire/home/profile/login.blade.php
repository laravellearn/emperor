<div>
    <div id="main">
        <div class="col-lg-4 col-md-6 col-xs-12 mx-auto">
            <div class="account-box">
                <a href="{{ route('home') }}" class="logo-account"><img src="{{ asset('home/images/logo-login.png') }}" alt="logo"></a>
                <span class="account-head-line">ورود به دیجی&zwnj;استور</span>
                <div class="content-account">
                    <form role="form" wire:submit.prevent='userForm'>
                        @include('errors.error')
                        <label for="email-phone">شماره موبایل یا پست الکترونیک خود را وارد کنید</label>
                        <input type="text" id="email-phone" wire:model="user.emailPhone" class="input-email-account" placeholder="">
                        <a href="password-forget.html" class="account-link-password">رمز خود را فراموش کرده ام</a>
                        <div class="parent-btn">
                            <button type="submit" class="dk-btn dk-btn-info">
                                ورود به دیجی استور
                                <i class="fa fa-sign-in sign-in"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="account-footer">
                    <span>کاربر جدید هستید؟</span>
                    <a href="register.html" class="btn-link-register">ثبت&zwnj;نام در دیجی&zwnj;استور</a>
                </div>
            </div>
        </div>
    </div>
</div>
