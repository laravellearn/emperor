@section('title','تغییر رمز عبور')
<div>
    <div id="main">
        <div class="col-lg-4 col-md-6 col-xs-12 mx-auto">
            <div class="account-box">
                <a href="{{ route('home') }}" class="logo-account"><img src="{{ asset('home/images/logo-login.png') }}" alt="logo"></a>
                <span class="account-head-line" style="text-align:center">تغییر رمز عبور</span>
                <div class="content-account">
                    <hr>
                    <form wire:submit.prevent='PasswordChange' id="password-change" >
                        <div class="massege-light">
                            شما در حال تغییر رمز عبور برای شماره موبایل <b>{{ $user->mobile }}</b> می باشید.
                            <br>
                        </div>
                        @include('errors.error')

                        <label for="password">رمز عبور جدید</label>
                        <input type="password" required wire:model.defer='password' id="password" class="input-password" placeholder="">
                        <label for="password_confirmation">تکرار رمز عبور جدید</label>
                        <input type="password" required id="password_confirmation" wire:model.defer='password_confirmation' class="input-password" placeholder="">
                        <div class="parent-btn">
                            <button class="dk-btn dk-btn-info" type="submit">
                                تغییر رمز عبور
                                <i class="fa fa-refresh sign-in"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
