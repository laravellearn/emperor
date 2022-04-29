<div>
    <div id="main">
        <div class="col-lg-4 col-md-6 col-xs-12 mx-auto">
            <div class="account-box">
                <a href="index.html" class="logo-account"><img src="{{ asset('home/images/logo-login.png') }}" alt="logo"></a>
                <div class="message-light">
                    <div class="massege-light">
                        برای شماره همراه <b>{{ $user->mobile }}</b> کد تایید ارسال گردید
                        <br>
                        <a href="#" class="form-edit-number">
                            ویرایش شماره
                        </a>
                    </div>
                    <div class="form-account">
                        <div class="form-account-title">کد تایید را وارد کنید</div>
                        <div class="form-account-row">
                            <div class="lines-number-input">
                                <input type="text" class="line-number-account" maxlength="1">
                                <input type="text" class="line-number-account" maxlength="1">
                                <input type="text" class="line-number-account" maxlength="1">
                                <input type="text" class="line-number-account" maxlength="1">
                            </div>
                        </div>
                    </div>
                    <div class="form-account-row">دریافت مجدد کد تایید(
                        <p id="countdown-verify-end"><span class="day">0</span><span class="hour">0</span><span>:
                                2</span><span>58</span></p>
                        )
                    </div>
                </div>
                <div class="account-footer">
                    <span>کاربر جدید هستید؟</span>
                    <a href="register.html" class="btn-link-register">ثبت‌نام در دیجی‌استور</a>
                </div>
            </div>
        </div>
    </div>
    @section('scripts')
    <script src="{{ asset('home/js/countdown.min.js') }}"></script>
@endsection
</div>

