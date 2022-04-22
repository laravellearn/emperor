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
                @foreach ($topLogoFooter as $logo)
                    <a href="#" class="footer-badge">
                        <img src="{{ $logo->image }}" alt="badge">
                        <span class="item-feature">{{ $logo->title }}</span>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="col-12">
            <div class="middle-bar-footer">
                <div class="col-lg-9 col-xs-12 pull-right">
                    <div class="footer-links">
                        @if ($menus1->count() != 0)
                            <div class="links-col">
                                <a href="#" class="head-line">{{ $footer->widgetLabel1 }}</a>
                                <ul class="links-ul">
                                    @foreach ($menus1 as $menu)
                                        <li><a href="{{ $menu->url }}">{{ $menu->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if ($menus2->count() != 0)
                            <div class="links-col">
                                <a href="#" class="head-line">{{ $footer->widgetLabel2 }}</a>
                                <ul class="links-ul">
                                    @foreach ($menus2 as $menu)
                                        <li><a href="{{ $menu->url }}">{{ $menu->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if ($menus3->count() != 0)

                            <div class="links-col">
                                <a href="#" class="head-line">{{ $footer->widgetLabel3 }}</a>
                                <ul class="links-ul">
                                    @foreach ($menus3 as $menu)
                                        <li><a href="{{ $menu->url }}">{{ $menu->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if ($menus4->count() != 0)

                            <div class="links-col">
                                <a href="#" class="head-line">{{ $footer->widgetLabel4 }}</a>
                                <ul class="links-ul">
                                    @foreach ($menus4 as $menu)
                                        <li><a href="{{ $menu->url }}">{{ $menu->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if ($menus5->count() != 0)

                            <div class="links-col">
                                <a href="#" class="head-line">{{ $footer->widgetLabel5 }}</a>
                                <ul class="links-ul">
                                    @foreach ($menus5 as $menu)
                                        <li><a href="{{ $menu->url }}">{{ $menu->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="links-col">
                            <a href="#" class="head-line">نماد ها</a>
                            <ul class="links-ul">
                                {!! $footer->enamad !!}
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
                            <a target="_blank" href="{{ $footer->socialLink1 }}"><i
                                    class="{{ $footer->socialIcon1 }}"></i></a>
                            <a target="_blank" href="{{ $footer->socialLink2 }}"><i
                                    class="{{ $footer->socialIcon2 }}"></i></a>
                            <a target="_blank" href="{{ $footer->socialLink3 }}"><i
                                    class="{{ $footer->socialIcon3 }}"></i></a>
                            <a target="_blank" href="{{ $footer->socialLink4 }}"><i
                                    class="{{ $footer->socialIcon4 }}"></i></a>
                            <a target="_blank" href="{{ $footer->socialLink5 }}"><i
                                    class="{{ $footer->socialIcon5 }}"></i></a>
                            <a target="_blank" href="{{ $footer->socialLink6 }}"><i
                                    class="{{ $footer->socialIcon6 }}"></i></a>
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
                        <li class="email-title">{{ $footer->emailLabel }}<a
                                href="mailto:{{ $footer->email }}">{{ $footer->email }}</a></li>
                        <li class="email-title">{{ $footer->addressLabel }}{{ $footer->address }}</li>
                    </ul>
                </div>

                <div class="address-images">
                    <a href="{{ $footer->linkApp1 }}"><img src="{{ $footer->imageApp1 }}"></a>
                    <a href="{{ $footer->linkApp2 }}"><img src="{{ $footer->imageApp2 }}"></a>
                </div>
            </div>
        </div>

        <div class="more-info">
            <div class="col-12">
                <div class="about-site">
                    <h1>{{ $footer->aboutHeadLabel }}</h1>
                    <p>{{ $footer->aboutbodyLabel }}</p>

                    <div class="footer-inner-box">
                        @foreach ($bottomLogoFooter as $logo)
                            <a href="#" class="footer-badge">
                                <img src="{{ $logo->image }}" style="width: 130px !important;" alt="badge">
                            </a>
                        @endforeach
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
