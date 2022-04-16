<div>
    <!--   Footer---------------------------->
    <footer>
        <div class="footer-jump">
            <a href="#">
                <span class="footer-jump-angle"><i class="fa fa-angle-up"></i>{{ $footer->upLabel }}</span>
            </a>
        </div>

        <div class="container">
            <div class="footer-inner-box">
                <a href="#" class="footer-badge">
                    <img src="{{ asset('home/images/footer-svg/delivery.svg') }}" alt="badge">
                    <span class="item-feature">تحویل اکسپرس</span>
                </a>

                <a href="#" class="footer-badge">
                    <img src="{{ asset('home/images/footer-svg/contact-us.svg') }}" alt="badge">
                    <span class="item-feature">پشتیبانی 24 ساعته</span>
                </a>

                <a href="#" class="footer-badge">
                    <img src="{{ asset('home/images/footer-svg/payment-terms.svg') }}" alt="badge">
                    <span class="item-feature">پرداخت در منزل</span>
                </a>

                <a href="#" class="footer-badge">
                    <img src="{{ asset('home/images/footer-svg/return-policy.svg') }}" alt="badge">
                    <span class="item-feature">7 روز ضمانت برگشت</span>
                </a>

                <a href="#" class="footer-badge">
                    <img src="{{ asset('home/images/footer-svg/origin-guarantee.svg') }}" alt="badge">
                    <span class="item-feature">ضمانت اصل بودن کالا</span>
                </a>
            </div>
        </div>
        <div class="col-12">
            <div class="middle-bar-footer">
                <div class="col-lg-9 col-xs-12 pull-right">
                    <div class="footer-links">
                        <div class="links-col">
                            <a href="#" class="head-line">{{ $footer->widgetLabel1 }}</a>
                            <ul class="links-ul">
                                <li><a href="#">نحوه ثبت سفارش</a></li>
                                <li><a href="#">رویه ارسال سفارش</a></li>
                                <li><a href="#">شیوه‌های پرداخت</a></li>
                            </ul>
                        </div>

                        <div class="links-col">
                            <a href="#" class="head-line">{{ $footer->widgetLabel2 }}</a>
                            <ul class="links-ul">
                                <li><a href="#">پرسش یه پاسخ های متداول</a></li>
                                <li><a href="#">رویه های بازگرداندن کالا</a></li>
                                <li><a href="#">شرایط استفاده</a></li>
                                <li><a href="#">حریم خصوصی</a></li>
                                <li><a href="#">گزارش باگ</a></li>
                            </ul>
                        </div>

                        <div class="links-col">
                            <a href="#" class="head-line">{{ $footer->widgetLabel3 }}</a>
                            <ul class="links-ul">
                                <li><a href="#">اتاق خبر دیجی استور</a></li>
                                <li><a href="#">فروش در دیجی استور</a></li>
                                <li><a href="#">فرصت های شغلی</a></li>
                                <li><a href="#">تماس با دیجی استور</a></li>
                                <li><a href="#">درباره ما دیجی استور</a></li>
                            </ul>
                        </div>

                        <div class="links-col">
                            <a href="#" class="head-line">{{ $footer->widgetLabel4 }}</a>
                            <ul class="links-ul">
                                <li><a href="#">اتاق خبر دیجی استور</a></li>
                                <li><a href="#">فروش در دیجی استور</a></li>
                                <li><a href="#">فرصت های شغلی</a></li>
                                <li><a href="#">تماس با دیجی استور</a></li>
                                <li><a href="#">درباره ما دیجی استور</a></li>
                            </ul>
                        </div>

                        <div class="links-col">
                            <a href="#" class="head-line">{{ $footer->widgetLabel5 }}</a>
                            <ul class="links-ul">
                                <li><a href="#">اتاق خبر دیجی استور</a></li>
                                <li><a href="#">فروش در دیجی استور</a></li>
                                <li><a href="#">فرصت های شغلی</a></li>
                                <li><a href="#">تماس با دیجی استور</a></li>
                                <li><a href="#">درباره ما دیجی استور</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-xs-12 pull-left">
                    <div class="footer-form">
                        <span class="newslitter-form">{{ $footer->rssLabel }}</span>

                        <form action="#">
                            <input type="text" class="input-footer" placeholder="آدرس ایمیل خود را وارد کنید">

                            <button class="btn-footer-post">ارسال</button>
                        </form>
                    </div>

                    <div class="footer-social">
                        <span class="newslitter-form-social">{{ $footer->socialLabel }}</span>

                        <div class="social-links">
                            <a target="_blank" href="{{ $footer->socialLink1 }}" ><i class="{{ $footer->socialIcon1 }}"></i></a>
                            <a target="_blank" href="{{ $footer->socialLink2 }}"><i class="{{ $footer->socialIcon2 }}"></i></a>
                            <a target="_blank" href="{{ $footer->socialLink3 }}"><i class="{{ $footer->socialIcon3 }}"></i></a>
                            <a target="_blank" href="{{ $footer->socialLink4 }}"><i class="{{ $footer->socialIcon4 }}"></i></a>
                            <a target="_blank" href="{{ $footer->socialLink5 }}"><i class="{{ $footer->socialIcon5 }}"></i></a>
                            <a target="_blank" href="{{ $footer->socialLink6 }}"><i class="{{ $footer->socialIcon6 }}"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="footer-address">
                <div class="footer-contact">
                    <ul>
                        <li>{{ $footer->supportLabel }}</li>
                        <li style="float:right">{{ $footer->phoneLabel }}{{ $footer->phone }}</li>
                                <li class="email-title">{{ $footer->emailLabel }}<a href="mailto:{{ $footer->email }}">{{ $footer->email }}</a></li>
                                <li class="email-title">{{ $footer->addressLabel }}{{ $footer->address }}</li>
                            </ul>
                </div>

                <div class="address-images">
                    <a href="#">
                        <img src="{{ asset('home/images/footer-img/1090a120.png') }}" alt="address">
                        <img src="{{ asset('home/images/footer-img/71abe5c9.png') }}" alt="address">
                    </a>
                </div>
            </div>
        </div>

        <div class="more-info">
            <div class="col-12">
                <div class="about-site">
                    <h1>{{ $footer->aboutHeadLabel }}</h1>
                    <p>{{ $footer->aboutbodyLabel }}</p>

                    <div class="footer-inner-box">
                        <a href="#" class="footer-badge">
                            <img src="{{ asset('home/images/footer-svg/footer-1.svg') }}" style="width: 130px !important;"
                                alt="badge">
                        </a>

                        <a href="#" class="footer-badge">
                            <img src="{{ asset('home/images/footer-svg/footer-2.svg') }}" style="width: 130px !important;"
                                alt="badge">
                        </a>

                        <a href="#" class="footer-badge">
                            <img src="{{ asset('home/images/footer-svg/footer-3.svg') }}" style="width: 130px !important;"
                                alt="badge">
                        </a>

                        <a href="#" class="footer-badge">
                            <img src="{{ asset('home/images/footer-svg/footer-4.svg') }}" style="width: 130px !important;"
                                alt="badge">
                        </a>
                        <a href="#" class="footer-badge">
                            <img src="{{ asset('home/images/footer-svg/footer-5.svg') }}" style="width: 130px !important;"
                                alt="badge">
                        </a>
                    </div>
                </div>

                <div class="copy-right-footer">
                    <p>{{ $footer->copyRight }}</p>
                </div>
            </div>
        </div>
    </footer>
    <!--   Footer---------------------------->

</div>
