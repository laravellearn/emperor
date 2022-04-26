<div>
    <div id="main">
        <div class="col-lg-4 col-md-6 col-xs-12 mx-auto">
            <div class="account-box">
                <a href="{{ route('home') }}" class="logo-account"><img src="{{ asset('home/images/logo-login.png') }}" alt="logo"></a>
                <span class="account-head-line">کد تائیدیه را وارد نمائید</span>
                <div class="content-account">
                    <form role="form" wire:submit.prevent='userForm'>
                        @include('errors.error')
                        <input type="number" id="email-phone" wire:model="user.token" class="input-email-account" placeholder="">
                        <div class="parent-btn">
                            <button type="submit" class="dk-btn dk-btn-info">
                                تائید
                                <i class="fa fa-sign-in sign-in"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
