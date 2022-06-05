<div>
    <header class="header-main-page">
        <div class="d-block">
            <div>
                <div class="col-lg-8 col-md-8 col-xs-12 pull-right">
                    <div class="header-right">
                        <div class="logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('home/images/logo.png') }}"
                                    alt="logo"></a>
                        </div>

                        <div class="col-lg-8 col-md-12 col-xs-12 pull-right">
                            <div class="search-header search-box">
                                <form action="#">
                                    <input type="text" class="header-search-input" placeholder="جستجو در دیجی استور...">
                                    <button class="btn-search" type="submit"><img
                                            src="{{ asset('home/images/search.png') }}" alt="search"></button>
                                </form>
                                <div class="search-result">
                                    <ul class="search-result-list">
                                        <li>
                                            <a href="#" class="btn btn-light btn-remove-search">موبایل
                                                <i class="mdi mdi-close"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn btn-light btn-remove-search">لپ تاپ
                                                <i class="mdi mdi-close"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn btn-light btn-remove-search">مودم
                                                <i class="mdi mdi-close"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn btn-light btn-remove-search">شیائومی
                                                <i class="mdi mdi-close"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn btn-light btn-remove-search">دوربین
                                                <i class="mdi mdi-close"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="search-result-most-view">
                                        <li><a href="#">موبایل <i class="fa fa-angle-left"></i></a></li>
                                        <li><a href="#">لپ تاپ <i class="fa fa-angle-left"></i></a></li>
                                        <li><a href="#">مودم <i class="fa fa-angle-left"></i></a></li>
                                        <li><a href="#">شیائومی <i class="fa fa-angle-left"></i></a></li>
                                        <li><a href="#">دوربین <i class="fa fa-angle-left"></i></a></li>
                                    </ul>
                                    <div class="search-results-list js-search-ad-banner">
                                        <a href="#">
                                            <img src="{{ asset('home/images/banner-search.jpg') }}"
                                                alt="banner-search">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-12 pull-left">
                    <div class="header-left">
                        <div class="mini-cart-header">
                            <a href="cart.html" style="color: #4a5f73;">
                                <span class="mdi mdi-basket"></span>
                                <span class="cart-count">2</span>
                            </a>
                            <div class="mini-cart-dropdown">
                                <div class="header-cart-info-header">
                                    <div class="header-cart-info-count">2 کالا</div>
                                    <a href="#" class="header-cart-info-link">
                                        <span>مشاهده سبد خرید</span>
                                    </a>
                                </div>
                                <div class="wrapper">
                                    <div class="scrollbar" id="style-1">
                                        <div class="force-overflow">
                                            <ul class="header-basket-list">
                                                <li class="js-mini-cart-item">
                                                    <a href="#" class="header-basket-list-item">
                                                        <div class="header-basket-list-item-image">
                                                            <img src="{{ asset('home/images/product-slider-2/GalaxyS20Ultra.jpg') }}"
                                                                alt="img-slider">
                                                        </div>
                                                        <div class="header-basket-list-item-content">
                                                            <h1 class="header-basket-list-item-title">گوشی موبایل
                                                                سامسونگ مدل Galaxy S20 Ultra SM-G988B/DS دو سیم کارت
                                                                ظرفیت 128 گیگابایت</h1>
                                                            <span class="header-basket-list-item-shipping-type">موجود در
                                                                انبار
                                                                دیجی‌کلا</span>
                                                            <div class="header-basket-list-item-footer">
                                                                <div class="header-basket-list-item-props">
                                                                    <span class="header-basket-list-item-props-item"> ۱
                                                                        عدد</span>
                                                                    <span class="header-basket-list-item-props-item">
                                                                        <span
                                                                            class="header-basket-list-item-color-badge"
                                                                            style="background: #9E9E9E">
                                                                        </span>
                                                                        خاکستری
                                                                    </span>
                                                                    <span class="header-basket-list-item-remove">
                                                                        <i class="mdi mdi-delete"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="js-mini-cart-item">
                                                    <a href="#" class="header-basket-list-item">
                                                        <div class="header-basket-list-item-image">
                                                            <img src="{{ asset('home/images/product-slider-2/Huawei-WATCHFIT.jpg') }}"
                                                                alt="img-slider">
                                                        </div>
                                                        <div class="header-basket-list-item-content">
                                                            <h1 class="header-basket-list-item-title">ساعت هوشمند هوآوی
                                                                مدل WATCH FIT</h1>
                                                            <span class="header-basket-list-item-shipping-type">موجود در
                                                                انبار
                                                                دیجی‌کلا</span>
                                                            <div class="header-basket-list-item-footer">
                                                                <div class="header-basket-list-item-props">
                                                                    <span class="header-basket-list-item-props-item"> ۱
                                                                        عدد</span>
                                                                    <span class="header-basket-list-item-props-item">
                                                                        <span
                                                                            class="header-basket-list-item-color-badge"
                                                                            style="background: #00e676"></span>
                                                                        سبز
                                                                    </span>
                                                                    <span class="header-basket-list-item-remove">
                                                                        <i class="mdi mdi-delete"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="js-mini-cart-item">
                                                    <a href="#" class="header-basket-list-item">
                                                        <div class="header-basket-list-item-image">
                                                            <img src="{{ asset('home/images/product-slider-2/NIGHT-HUNTER.jpg') }}"
                                                                alt="img-slider">
                                                        </div>
                                                        <div class="header-basket-list-item-content">
                                                            <h1 class="header-basket-list-item-title">کامپیوتر دسکتاپ
                                                                دیویژن مدل NIGHT HUNTER</h1>
                                                            <span class="header-basket-list-item-shipping-type">موجود در
                                                                انبار
                                                                دیجی‌کلا</span>
                                                            <div class="header-basket-list-item-footer">
                                                                <div class="header-basket-list-item-props">
                                                                    <span class="header-basket-list-item-props-item"> ۱
                                                                        عدد</span>
                                                                    <span class="header-basket-list-item-props-item">
                                                                        <span
                                                                            class="header-basket-list-item-color-badge"
                                                                            style="background: #000000"></span>
                                                                        مشکی
                                                                    </span>
                                                                    <span class="header-basket-list-item-remove">
                                                                        <i class="mdi mdi-delete"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-cart-info-footer">
                                    <div class="header-cart-info-total">
                                        <span class="header-cart-info-total-text">مبلغ قابل پرداخت</span>
                                        <p class="header-cart-info-total-amount">
                                            <span class="header-cart-info-total-amount-number"> 6,200,000</span>
                                            <span> تومان</span>
                                        </p>
                                    </div>
                                    <div>
                                        <a href="#" class="header-cart-info-submit btn btn-danger">ثبت سفارش</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="btn-login">
                            @auth
                                <span class="mdi mdi-account"></span>
                                پروفایل من
                                <div class="dropdown-menu-login">
                                    <a href="{{ route('user.profile') }}">
                                        <div class="header-profile-dropdown-account">
                                            <div class="header-profile-dropdown-user">
                                                <div class="header-profile-dropdown-user-img">
                                                    <img src="{{ $user->profilePhoto }}" alt="profile">
                                                </div>
                                                <div class="header-profile-dropdown-user-info">
                                                    <p class="header-profile-dropdown-user-name">{{ $user->name }}
                                                        <span class="header-profile-dropdown-user-profile-link">مشاهده حساب
                                                            کاربری</span>
                                                    </p>
                                                </div>
                                                <div class="header-profile-dropdown-account">
                                                    <div class="header-profile-dropdown-account-item">
                                                        <span class="header-profile-dropdown-account-item-title">کیف
                                                            پول</span>
                                                        <div class="header-profile-dropdown-account-item-amount">
                                                            <span
                                                                class="header-profile-dropdown-account-item-amount-number">۰
                                                            </span>
                                                            تومان
                                                        </div>
                                                    </div>
                                                    <div class="header-profile-dropdown-account-item">
                                                        <span
                                                            class="header-profile-dropdown-account-item-title">دیجی‌کلاب</span>
                                                        <div class="header-profile-dropdown-account-item-amount">
                                                            <span
                                                                class="header-profile-dropdown-account-item-amount-number">۰
                                                            </span>
                                                            تومان
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="header-profile-dropdown-actions">
                                        @if ($user->typeUser == 'admin')
                                            <a href="{{ route('admin.home') }}">
                                                <div class="header-profile-dropdown-action-container">
                                                    <span class="header-profile-dropdown-action-link">
                                                        پنل مدیریت
                                                    </span>
                                                </div>
                                            </a>
                                        @endif
                                        <div class="header-profile-dropdown-action-container">
                                            <span class="header-profile-dropdown-action-link">سفارش‌های من</span>
                                        </div>
                                        <div class="header-profile-dropdown-action-container">
                                            <span class="header-profile-dropdown-action-link">جوایز دیجی‌کلاب</span>
                                        </div>
                                        <div class="header-profile-dropdown-action-container">
                                            <a wire:click="logout({{ $user->id }})">
                                                <span class="header-profile-dropdown-action-link">خروج از حساب
                                                    کاربری</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endauth
                            @guest
                                <a href="{{ route('login') }}" style="color:#3f3f3f"><span
                                        class="mdi mdi-account"></span> ورود </a>
                            @endguest
                        </div>

                        <!-- Example single danger button -->
                        <!-- responsive header-->
                        <div class="responsive-header-left">
                            <div class="btn-login-responsive">
                                <span class="mdi mdi-account"></span>
                                <span class="cart-count">3</span>
                                <div class="dropdown-menu-login">
                                    <div class="header-profile-dropdown-account">
                                        <div class="header-profile-dropdown-user">
                                            <div class="header-profile-dropdown-user-img">
                                                <img src="{{ asset('home/images/svg/user-profile.svg') }}"
                                                    alt="profile">
                                            </div>
                                            <div class="header-profile-dropdown-user-info">
                                                <p class="header-profile-dropdown-user-name">حمید متقی پیشه
                                                    <span class="header-profile-dropdown-user-profile-link">مشاهده
                                                        حساب کاربری</span>
                                                </p>
                                            </div>
                                            <div class="header-profile-dropdown-account">
                                                <div class="header-profile-dropdown-account-item">
                                                    <span class="header-profile-dropdown-account-item-title">کیف
                                                        پول</span>
                                                    <div class="header-profile-dropdown-account-item-amount">
                                                        <span
                                                            class="header-profile-dropdown-account-item-amount-number">۰
                                                        </span>
                                                        تومان
                                                    </div>
                                                </div>
                                                <div class="header-profile-dropdown-account-item">
                                                    <span
                                                        class="header-profile-dropdown-account-item-title">دیجی‌کلاب</span>
                                                    <div class="header-profile-dropdown-account-item-amount">
                                                        <span
                                                            class="header-profile-dropdown-account-item-amount-number">۰
                                                        </span>
                                                        تومان
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header-profile-dropdown-actions">
                                        <div class="header-profile-dropdown-action-container">
                                            <span class="header-profile-dropdown-action-link">سفارش‌های من</span>
                                        </div>
                                        <div class="header-profile-dropdown-action-container">
                                            <span class="header-profile-dropdown-action-link">جوایز دیجی‌کلاب</span>
                                        </div>
                                        <div class="header-profile-dropdown-action-container">
                                            <span class="header-profile-dropdown-action-link">خروج از حساب
                                                کاربری</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mini-cart-header-responsive">
                                <span class="mdi mdi-basket"></span>
                                <div class="mini-cart-dropdown">
                                    <div class="header-cart-info-header">
                                        <div class="header-cart-info-count">3 کالا</div>
                                        <a href="#" class="header-cart-info-link">
                                            <span>مشاهده سبد خرید</span>
                                        </a>
                                    </div>
                                    <div class="wrapper">
                                        <div class="scrollbar" id="style-1">
                                            <div class="force-overflow">
                                                <ul class="header-basket-list">
                                                    <li class="js-mini-cart-item">
                                                        <a href="#" class="header-basket-list-item">
                                                            <div class="header-basket-list-item-image">
                                                                <img src="{{ asset('home/images/product-slider-2/GalaxyS20Ultra.jpg') }}"
                                                                    alt="img-slider">
                                                            </div>
                                                            <div class="header-basket-list-item-content">
                                                                <h1 class="header-basket-list-item-title">گوشی موبایل
                                                                    سامسونگ مدل Galaxy S20 Ultra SM-G988B/DS دو سیم کارت
                                                                    ظرفیت 128 گیگابایت</h1>
                                                                <span
                                                                    class="header-basket-list-item-shipping-type">موجود
                                                                    در
                                                                    انبار
                                                                    دیجی‌کلا</span>
                                                                <div class="header-basket-list-item-footer">
                                                                    <div class="header-basket-list-item-props">
                                                                        <span
                                                                            class="header-basket-list-item-props-item">
                                                                            ۱
                                                                            عدد</span>
                                                                        <span
                                                                            class="header-basket-list-item-props-item">
                                                                            <span
                                                                                class="header-basket-list-item-color-badge"
                                                                                style="background: #9E9E9E"></span>
                                                                            خاکستری
                                                                        </span>
                                                                        <span class="header-basket-list-item-remove">
                                                                            <i class="mdi mdi-delete"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="js-mini-cart-item">
                                                        <a href="#" class="header-basket-list-item">
                                                            <div class="header-basket-list-item-image">
                                                                <img src="{{ asset('home/images/product-slider-2/Huawei-WATCHFIT.jpg') }}"
                                                                    alt="img-slider">
                                                            </div>
                                                            <div class="header-basket-list-item-content">
                                                                <h1 class="header-basket-list-item-title">ساعت هوشمند
                                                                    هوآوی
                                                                    مدل WATCH FIT</h1>
                                                                <span
                                                                    class="header-basket-list-item-shipping-type">موجود
                                                                    در
                                                                    انبار
                                                                    دیجی‌کلا</span>
                                                                <div class="header-basket-list-item-footer">
                                                                    <div class="header-basket-list-item-props">
                                                                        <span
                                                                            class="header-basket-list-item-props-item">
                                                                            ۱
                                                                            عدد</span>
                                                                        <span
                                                                            class="header-basket-list-item-props-item">
                                                                            <span
                                                                                class="header-basket-list-item-color-badge"
                                                                                style="background: #00e676"></span>
                                                                            سبز
                                                                        </span>
                                                                        <span class="header-basket-list-item-remove">
                                                                            <i class="mdi mdi-delete"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="js-mini-cart-item">
                                                        <a href="#" class="header-basket-list-item">
                                                            <div class="header-basket-list-item-image">
                                                                <img src="{{ asset('home/images/product-slider-2/NIGHT-HUNTER.jpg') }}"
                                                                    alt="img-slider">
                                                            </div>
                                                            <div class="header-basket-list-item-content">
                                                                <h1 class="header-basket-list-item-title">کامپیوتر
                                                                    دسکتاپ
                                                                    دیویژن مدل NIGHT HUNTER</h1>
                                                                <span
                                                                    class="header-basket-list-item-shipping-type">موجود
                                                                    در
                                                                    انبار
                                                                    دیجی‌کلا</span>
                                                                <div class="header-basket-list-item-footer">
                                                                    <div class="header-basket-list-item-props">
                                                                        <span
                                                                            class="header-basket-list-item-props-item">
                                                                            ۱
                                                                            عدد</span>
                                                                        <span
                                                                            class="header-basket-list-item-props-item">
                                                                            <span
                                                                                class="header-basket-list-item-color-badge"
                                                                                style="background: #000000"></span>
                                                                            مشکی
                                                                        </span>
                                                                        <span class="header-basket-list-item-remove">
                                                                            <i class="mdi mdi-delete"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header-cart-info-footer">
                                        <div class="header-cart-info-total">
                                            <span class="header-cart-info-total-text">مبلغ قابل پرداخت</span>
                                            <p class="header-cart-info-total-amount">
                                                <span class="header-cart-info-total-amount-number"> 6,200,000</span>
                                                <span> تومان</span>
                                            </p>
                                        </div>
                                        <div>
                                            <a href="#" class="header-cart-info-submit btn btn-danger">ثبت سفارش</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="question-faq"><span class="fa fa-question-circle-o"></span></button>
                        </div>
                        <!-- responsive header-->
                    </div>
                </div>
            </div>
            <!-- Start megamenu-->
            <nav class="main-menu">
                <ul class="new-list-menu">
                    <li class="item-list-menu megamenu-1 category nav-overlay"><a href="#"
                            class="list-category first after" style="font-weight: bold;"><i
                                class="mdi mdi-menu"></i>
                            دسته بندی کالاها</a>

                        <ul class="list-menu-level-2">
                            @foreach ($categories as $category)
                                <li class="item-menu-2"><a href="/product/category/{{ $category->slug }}"
                                        class="list-category-menu-2"><i
                                            class="{{ $category->icon }}"></i>{{ $category->title }}</a>

                                    <ul class="megamenu-level-3 row">
                                        <li class="list-category">
                                            <a href="/product/category/{{ $category->slug }}"
                                                class="list-category-megamenu">همه دسته بندی های
                                                {{ $category->title }}</a>
                                        </li>
                                        @foreach (\App\Models\Admin\products\Category::where('level', 2)->where('isActive', 1)->where('parent_id', $category->id)->get()
    as $item2)
                                            <li class="item-megamenu-title"><a
                                                    href="/product/category/{{ $item2->slug }}"
                                                    class="list-category-megamenu-3"><span>{{ $item2->title }}<i
                                                            class="fa fa-angle-left"></i></span></a></li>
                                        @foreach (\App\Models\Admin\products\Category::where('level', 3)->where('isActive', 1)->where('parent_id', $item2->id)->get() as $item3)
                                            <li class="item-megamenu-item"><a href="/product/category/{{ $item3->slug }}"
                                                    class="list-category-megamenu-3">{{ $item3->title }}</a></li>

                                                            @endforeach
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>

                    </li>


                    <li class="item-list-menu megamenu-1"><a href="#" class="list-category first after"
                            style="font-weight: bold;"><i class="mdi mdi-store text-warning"></i> سوپر مارکت</a></li>
                    <li class="item-list-menu megamenu-1 nav-overlay"><a href="#" class="list-category first after"
                            style="font-weight: bold;"><i class="mdi mdi-sale text-danger"></i> تخفیف و پیشنهاد ها</a>
                        <ul class="list-menu-level-2 list-menu-discounts-offers">
                            <li class="discounts-offers-list-item">
                                <ul>
                                    <li class="discounts-offers-item">
                                        <a href="#" class="list-category-megamenu-3"><span>مشاهده همه تخفیف‌ها و
                                                پیشنهادها<i class="fa fa-angle-left"></i></span></a>
                                    </li>
                                    <li class="discounts-offers-item">
                                        <a href="#"
                                            class="list-category-megamenu-3 list-category-megamenu-3-medium"><span>کالاهای
                                                شگفت‌انگیز<i class="fa fa-angle-left"></i></span></a>
                                    </li>
                                    <li class="discounts-offers-item">
                                        <a href="#"
                                            class="list-category-megamenu-3 list-category-megamenu-3-medium"><span>شگفت‌انگیز
                                                سوپرمارکتی<i class="fa fa-angle-left"></i></span></a>
                                    </li>
                                    <li class="discounts-offers-item">
                                        <a href="#"
                                            class="list-category-megamenu-3 list-category-megamenu-3-medium"><span>فروش
                                                ویژه<i class="fa fa-angle-left"></i></span></a>
                                    </li>
                                    <li class="discounts-offers-item">
                                        <a href="#"
                                            class="list-category-megamenu-3 list-category-megamenu-3-medium"><span
                                                class="medium-display-title">کالای دیجیتال</span></a>
                                    </li>
                                    <li class="discounts-offers-item">
                                        <a href="#"
                                            class="list-category-megamenu-3 list-category-megamenu-3-medium"><span
                                                class="medium-display-title">کالای دیجیتال</span></a>
                                    </li>
                                    <li class="discounts-offers-item">
                                        <a href="#"
                                            class="list-category-megamenu-3 list-category-megamenu-3-medium"><span
                                                class="medium-display-title">کالای دیجیتال</span></a>
                                    </li>
                                    <li class="discounts-offers-item">
                                        <a href="#"
                                            class="list-category-megamenu-3 list-category-megamenu-3-medium"><span
                                                class="medium-display-title">کالای دیجیتال</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="discounts-offers-list-item">
                                <ul>
                                    <li class="discounts-offers-item sublist-option">
                                        <a href="#"
                                            class="list-category-megamenu-3 list-category-megamenu-3-medium"><span
                                                class="medium-display-title">بسته های لوازم تحریر کمتر از ۱۰۰ هزار
                                                تومان</span></a>
                                    </li>
                                    <li class="discounts-offers-item sublist-option">
                                        <a href="#"
                                            class="list-category-megamenu-3 list-category-megamenu-3-medium"><span
                                                class="medium-display-title">ابزار دستی کمتر از ۱۰۰ هزار تومان
                                            </span></a>
                                    </li>
                                    <li>
                                        <span class="sublist-divider"></span>
                                    </li>
                                    <li class="discounts-offers-item">
                                        <a href="#"
                                            class="list-category-megamenu-3 list-category-megamenu-3-medium"><span>با
                                                هر
                                                خرید هدیه بگیرید!</span></a>
                                    </li>
                                    <li class="discounts-offers-item">
                                        <a href="#"
                                            class="list-category-megamenu-3 list-category-megamenu-3-medium"><span>تخفیف
                                                پایان فصل</span></a>
                                    </li>
                                    <li class="discounts-offers-item">
                                        <a href="#"
                                            class="list-category-megamenu-3 list-category-megamenu-3-medium"><span>کارت
                                                هدیه
                                                خرید از دیجی‌کالا</span></a>
                                    </li>
                                    <li class="discounts-offers-item">
                                        <a href="#"
                                            class="list-category-megamenu-3 list-category-megamenu-3-medium"><span>تازه‌های
                                                فروشنده‌های جدید</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="discounts-offers-list-item main-banner">
                                <a href="#">
                                    <img src="{{ asset('home/images/banner.jpg') }}" alt="banner">
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="item-list-menu megamenu-1">
                        <a href="#" class="list-category first after">
                            <i class="mdi mdi-marker-check text-success"></i>
                            دیجی استور من
                        </a>
                    </li>
                    <li class="item-list-menu megamenu-1">
                        <a href="#" class="list-category first after">
                            <i class="mdi mdi-plus-outline text-primary"></i>
                            دیجی پلاس
                        </a>
                    </li>
                    <li class="item-list-menu megamenu-1 item-set"><a href="#" class="list-category first after">سوالی
                            دارید؟</a>
                    </li>
                    <li class="item-list-menu megamenu-1 item-set"><a href="#"
                            class="list-category first after">فروشنده
                            شوید</a>
                    </li>
                    <li class="map-city-item">
                        <a href="#" class="map-city">لطفا شهر و استان
                            خود را انتخاب کنید
                            <span class="mdi mdi-map-marker-outline"></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!--        End megamenu------------------->


        <!--    responsive-megamenu-mobile----------------->
        <nav class="sidebar">
            <div class="nav-header">
                <div class="header-cover"></div>
                <div class="logo-wrap">
                    <a class="logo-icon" href="#"><img alt="logo-icon"
                            src="{{ asset('home/images/logo.png') }}" width="40"></a>
                </div>
            </div>
            <ul class="nav-categories ul-base">
                <li class="has-sub"><a href="#">کالای دیجیتال</a>
                    <ul>
                        <li class="has-sub"><a href="#" class="category-level-2">لوازم جانبی گوشی</a>
                            <ul>
                                <li><a href="#" class="category-level-3">کیف و کاور گوشی</a></li>
                                <li><a href="#" class="category-level-3">پاور بانک(شارژر همراه)</a></li>
                                <li><a href="#" class="category-level-3">پایه نگهدارنده گوشی</a></li>
                                <li><a href="#" class="category-level-3">همه موارد این دسته</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="#" class="category-level-2">گوشی موبایل</a>
                            <ul>
                                <li><a href="#" class="category-level-3">سامسونگ</a></li>
                                <li><a href="#" class="category-level-3">هوآوی</a></li>
                                <li><a href="#" class="category-level-3">اپل</a></li>
                                <li><a href="#" class="category-level-3">شیائومی</a></li>
                                <li><a href="#" class="category-level-3">آنر</a></li>
                                <li><a href="#" class="category-level-3">نوکیا</a></li>
                                <li><a href="#" class="category-level-3">همه موارد این دسته</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="#" class="category-level-2">دوربین</a>
                            <ul>
                                <li><a href="#" class="category-level-3">دوربین عکاسی دیجیتال</a></li>
                                <li><a href="#" class="category-level-3">دوربین ورزشی و فیلم برداری</a></li>
                                <li><a href="#" class="category-level-3">دوربین چاپ سریع</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-sub"><a href="#">آرایشی، بهداشتی و سلامت</a>
                    <ul>
                        <li class="has-sub"><a href="#" class="category-level-2">لوازم جانبی گوشی</a>
                            <ul>
                                <li><a href="#" class="category-level-3">کیف و کاور گوشی</a></li>
                                <li><a href="#" class="category-level-3">پاور بانک(شارژر همراه)</a></li>
                                <li><a href="#" class="category-level-3">پایه نگهدارنده گوشی</a></li>
                                <li><a href="#" class="category-level-3">همه موارد این دسته</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="#" class="category-level-2">گوشی موبایل</a>
                            <ul>
                                <li><a href="#" class="category-level-3">سامسونگ</a></li>
                                <li><a href="#" class="category-level-3">هوآوی</a></li>
                                <li><a href="#" class="category-level-3">اپل</a></li>
                                <li><a href="#" class="category-level-3">شیائومی</a></li>
                                <li><a href="#" class="category-level-3">آنر</a></li>
                                <li><a href="#" class="category-level-3">نوکیا</a></li>
                                <li><a href="#" class="category-level-3">همه موارد این دسته</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="#" class="category-level-2">دوربین</a>
                            <ul>
                                <li><a href="#" class="category-level-3">دوربین عکاسی دیجیتال</a></li>
                                <li><a href="#" class="category-level-3">دوربین ورزشی و فیلم برداری</a></li>
                                <li><a href="#" class="category-level-3">دوربین چاپ سریع</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-sub"><a href="#">خودرو ، ابزار اداری</a>
                    <ul>
                        <li class="has-sub"><a href="#" class="category-level-2">لوازم جانبی گوشی</a>
                            <ul>
                                <li><a href="#" class="category-level-3">کیف و کاور گوشی</a></li>
                                <li><a href="#" class="category-level-3">پاور بانک(شارژر همراه)</a></li>
                                <li><a href="#" class="category-level-3">پایه نگهدارنده گوشی</a></li>
                                <li><a href="#" class="category-level-3">همه موارد این دسته</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="#" class="category-level-2">گوشی موبایل</a>
                            <ul>
                                <li><a href="#" class="category-level-3">سامسونگ</a></li>
                                <li><a href="#" class="category-level-3">هوآوی</a></li>
                                <li><a href="#" class="category-level-3">اپل</a></li>
                                <li><a href="#" class="category-level-3">شیائومی</a></li>
                                <li><a href="#" class="category-level-3">آنر</a></li>
                                <li><a href="#" class="category-level-3">نوکیا</a></li>
                                <li><a href="#" class="category-level-3">همه موارد این دسته</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="#" class="category-level-2">دوربین</a>
                            <ul>
                                <li><a href="#" class="category-level-3">دوربین عکاسی دیجیتال</a></li>
                                <li><a href="#" class="category-level-3">دوربین ورزشی و فیلم برداری</a></li>
                                <li><a href="#" class="category-level-3">دوربین چاپ سریع</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-sub"><a href="#">مد پوشاک</a>
                    <ul>
                        <li class="has-sub"><a href="#" class="category-level-2">لوازم جانبی گوشی</a>
                            <ul>
                                <li><a href="#" class="category-level-3">کیف و کاور گوشی</a></li>
                                <li><a href="#" class="category-level-3">پاور بانک(شارژر همراه)</a></li>
                                <li><a href="#" class="category-level-3">پایه نگهدارنده گوشی</a></li>
                                <li><a href="#" class="category-level-3">همه موارد این دسته</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="#" class="category-level-2">گوشی موبایل</a>
                            <ul>
                                <li><a href="#" class="category-level-3">سامسونگ</a></li>
                                <li><a href="#" class="category-level-3">هوآوی</a></li>
                                <li><a href="#" class="category-level-3">اپل</a></li>
                                <li><a href="#" class="category-level-3">شیائومی</a></li>
                                <li><a href="#" class="category-level-3">آنر</a></li>
                                <li><a href="#" class="category-level-3">نوکیا</a></li>
                                <li><a href="#" class="category-level-3">همه موارد این دسته</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="#" class="category-level-2">دوربین</a>
                            <ul>
                                <li><a href="#" class="category-level-3">دوربین عکاسی دیجیتال</a></li>
                                <li><a href="#" class="category-level-3">دوربین ورزشی و فیلم برداری</a></li>
                                <li><a href="#" class="category-level-3">دوربین چاپ سریع</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-sub"><a href="#">خانه آشپزخانه</a>
                    <ul>
                        <li class="has-sub"><a href="#" class="category-level-2">لوازم جانبی گوشی</a>
                            <ul>
                                <li><a href="#" class="category-level-3">کیف و کاور گوشی</a></li>
                                <li><a href="#" class="category-level-3">پاور بانک(شارژر همراه)</a></li>
                                <li><a href="#" class="category-level-3">پایه نگهدارنده گوشی</a></li>
                                <li><a href="#" class="category-level-3">همه موارد این دسته</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="#" class="category-level-2">گوشی موبایل</a>
                            <ul>
                                <li><a href="#" class="category-level-3">سامسونگ</a></li>
                                <li><a href="#" class="category-level-3">هوآوی</a></li>
                                <li><a href="#" class="category-level-3">اپل</a></li>
                                <li><a href="#" class="category-level-3">شیائومی</a></li>
                                <li><a href="#" class="category-level-3">آنر</a></li>
                                <li><a href="#" class="category-level-3">نوکیا</a></li>
                                <li><a href="#" class="category-level-3">همه موارد این دسته</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="#" class="category-level-2">دوربین</a>
                            <ul>
                                <li><a href="#" class="category-level-3">دوربین عکاسی دیجیتال</a></li>
                                <li><a href="#" class="category-level-3">دوربین ورزشی و فیلم برداری</a></li>
                                <li><a href="#" class="category-level-3">دوربین چاپ سریع</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-sub"><a href="#">کتاب، لوازم تحریر</a>
                    <ul>
                        <li class="has-sub"><a href="#" class="category-level-2">لوازم جانبی گوشی</a>
                            <ul>
                                <li><a href="#" class="category-level-3">کیف و کاور گوشی</a></li>
                                <li><a href="#" class="category-level-3">پاور بانک(شارژر همراه)</a></li>
                                <li><a href="#" class="category-level-3">پایه نگهدارنده گوشی</a></li>
                                <li><a href="#" class="category-level-3">همه موارد این دسته</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="#" class="category-level-2">گوشی موبایل</a>
                            <ul>
                                <li><a href="#" class="category-level-3">سامسونگ</a></li>
                                <li><a href="#" class="category-level-3">هوآوی</a></li>
                                <li><a href="#" class="category-level-3">اپل</a></li>
                                <li><a href="#" class="category-level-3">شیائومی</a></li>
                                <li><a href="#" class="category-level-3">آنر</a></li>
                                <li><a href="#" class="category-level-3">نوکیا</a></li>
                                <li><a href="#" class="category-level-3">همه موارد این دسته</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="#" class="category-level-2">دوربین</a>
                            <ul>
                                <li><a href="#" class="category-level-3">دوربین عکاسی دیجیتال</a></li>
                                <li><a href="#" class="category-level-3">دوربین ورزشی و فیلم برداری</a></li>
                                <li><a href="#" class="category-level-3">دوربین چاپ سریع</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="has-sub"><a href="#">اسباب بازی ، کودک نوزاد</a>
                    <ul>
                        <li class="has-sub"><a href="#" class="category-level-2">لوازم جانبی گوشی</a>
                            <ul>
                                <li><a href="#" class="category-level-3">کیف و کاور گوشی</a></li>
                                <li><a href="#" class="category-level-3">پاور بانک(شارژر همراه)</a></li>
                                <li><a href="#" class="category-level-3">پایه نگهدارنده گوشی</a></li>
                                <li><a href="#" class="category-level-3">همه موارد این دسته</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="#" class="category-level-2">گوشی موبایل</a>
                            <ul>
                                <li><a href="#" class="category-level-3">سامسونگ</a></li>
                                <li><a href="#" class="category-level-3">هوآوی</a></li>
                                <li><a href="#" class="category-level-3">اپل</a></li>
                                <li><a href="#" class="category-level-3">شیائومی</a></li>
                                <li><a href="#" class="category-level-3">آنر</a></li>
                                <li><a href="#" class="category-level-3">نوکیا</a></li>
                                <li><a href="#" class="category-level-3">همه موارد این دسته</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="#" class="category-level-2">دوربین</a>
                            <ul>
                                <li><a href="#" class="category-level-3">دوربین عکاسی دیجیتال</a></li>
                                <li><a href="#" class="category-level-3">دوربین ورزشی و فیلم برداری</a></li>
                                <li><a href="#" class="category-level-3">دوربین چاپ سریع</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-sub"><a href="#">ورزش و سفر</a>
                    <ul>
                        <li class="has-sub"><a href="#" class="category-level-2">لوازم جانبی گوشی</a>
                            <ul>
                                <li><a href="#" class="category-level-3">کیف و کاور گوشی</a></li>
                                <li><a href="#" class="category-level-3">پاور بانک(شارژر همراه)</a></li>
                                <li><a href="#" class="category-level-3">پایه نگهدارنده گوشی</a></li>
                                <li><a href="#" class="category-level-3">همه موارد این دسته</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="#" class="category-level-2">گوشی موبایل</a>
                            <ul>
                                <li><a href="#" class="category-level-3">سامسونگ</a></li>
                                <li><a href="#" class="category-level-3">هوآوی</a></li>
                                <li><a href="#" class="category-level-3">اپل</a></li>
                                <li><a href="#" class="category-level-3">شیائومی</a></li>
                                <li><a href="#" class="category-level-3">آنر</a></li>
                                <li><a href="#" class="category-level-3">نوکیا</a></li>
                                <li><a href="#" class="category-level-3">همه موارد این دسته</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="#" class="category-level-2">دوربین</a>
                            <ul>
                                <li><a href="#" class="category-level-3">دوربین عکاسی دیجیتال</a></li>
                                <li><a href="#" class="category-level-3">دوربین ورزشی و فیلم برداری</a></li>
                                <li><a href="#" class="category-level-3">دوربین چاپ سریع</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-sub"><a href="#">خوردنی و آشامیدنی</a>
                    <ul>
                        <li class="has-sub"><a href="#" class="category-level-2">لوازم جانبی گوشی</a>
                            <ul>
                                <li><a href="#" class="category-level-3">کیف و کاور گوشی</a></li>
                                <li><a href="#" class="category-level-3">پاور بانک(شارژر همراه)</a></li>
                                <li><a href="#" class="category-level-3">پایه نگهدارنده گوشی</a></li>
                                <li><a href="#" class="category-level-3">همه موارد این دسته</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="#" class="category-level-2">گوشی موبایل</a>
                            <ul>
                                <li><a href="#" class="category-level-3">سامسونگ</a></li>
                                <li><a href="#" class="category-level-3">هوآوی</a></li>
                                <li><a href="#" class="category-level-3">اپل</a></li>
                                <li><a href="#" class="category-level-3">شیائومی</a></li>
                                <li><a href="#" class="category-level-3">آنر</a></li>
                                <li><a href="#" class="category-level-3">نوکیا</a></li>
                                <li><a href="#" class="category-level-3">همه موارد این دسته</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="#" class="category-level-2">دوربین</a>
                            <ul>
                                <li><a href="#" class="category-level-3">دوربین عکاسی دیجیتال</a></li>
                                <li><a href="#" class="category-level-3">دوربین ورزشی و فیلم برداری</a></li>
                                <li><a href="#" class="category-level-3">دوربین چاپ سریع</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-sub"><a href="#">پیشنهاد ها و تخفیف ها</a>
                    <ul>
                        <li><a href="#" class="category-level-2">کالاهای شگفت انگیز</a></li>
                        <li><a href="#" class="category-level-2">فروش ویژه</a></li>
                        <li><a href="#" class="category-level-2">با هر خرید هدیه بگیرید</a></li>
                        <li><a href="#" class="category-level-2">تخفیف پایان فصل</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="nav-btn">
            <span class="linee1"></span>
            <span class="linee2"></span>
            <span class="linee3"></span>
        </div>
        <div class="overlay"></div>
        <!--    responsive-megamenu-mobile----------------->
    </header>
    <div class="nav-categories-overlay"></div>
    <div class="overlay-search-box"></div>

</div>
