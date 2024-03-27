<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    font-->
<link rel="stylesheet" href="{{ asset('home/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('home/css/materialdesignicons.css') }}">
<link rel="stylesheet" href="{{ asset('home/css/materialdesignicons.css.map') }}">
<!--    font-->
<link rel="stylesheet" href="{{ asset('home/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('home/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('home/css/style.css') }}">

@yield('styles')
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
                                <form action="{{ route('search') }}" method="post">
                                    @csrf
                                    <input type="text" class="header-search-input"
                                        placeholder="جستجو در فروشگاه..." name="title">
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
                                    <div class="header-cart-info-count">{{ \Cart::count() }} محصول </div>
                                    <a href="{{ route('orders.index') }}" class="header-cart-info-link">
                                        <span>مشاهده سبد خرید</span>
                                    </a>
                                </div>
                                <div class="wrapper">
                                    <div class="scrollbar" id="style-1">
                                        <div class="force-overflow">
                                            <ul class="header-basket-list">
                                                @foreach(\Cart::content() as $row)
                                                @php
                                                    $product = App\Models\Admin\products\Product::findOrFail($row->id);
                                                @endphp
                                                <li class="js-mini-cart-item">
                                                    <a href="#" class="header-basket-list-item">
                                                        <div class="header-basket-list-item-image">
                                                            <img src="{{ $product->image }}"
                                                                alt="img-slider">
                                                        </div>
                                                        <div class="header-basket-list-item-content">
                                                            <h1 class="header-basket-list-item-title">{{ $product->title }}</h1>
                                                            <span class="header-basket-list-item-shipping-type">موجود در
                                                                انبار
                                                                دیجی‌کلا</span>
                                                            <div class="header-basket-list-item-footer">
                                                                <div class="header-basket-list-item-props">
                                                                    <span class="header-basket-list-item-props-item"> {{ $row->qty }}
                                                                        عدد</span>
                                                                    <span class="header-basket-list-item-props-item">
                                                                        <span
                                                                            class="header-basket-list-item-color-badge"
                                                                            style="background: <?php echo ($row->options->has('color') ? $row->options->color : ''); ?>">
                                                                        </span>
                                                                        {{ $row->color }}
                                                                    </span>
                                                                    <span class="header-basket-list-item-remove">
                                                                        <i class="mdi mdi-delete"></i>
                                                                    </span>
                                                                </div>
                                                                <h6><?php echo number_format($row->qty * $product->price) ?> تومان</h6>

                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-cart-info-footer">
                                    <div class="header-cart-info-total">
                                        <span class="header-cart-info-total-text">مبلغ قابل پرداخت</span>
                                        <p class="header-cart-info-total-amount">
                                            <span class="header-cart-info-total-amount-number"> {{ number_format(\Cart::total()) }}</span>
                                            <span> تومان</span>
                                        </p>
                                    </div>
                                    <div>
                                        <a href="#" class="header-cart-info-submit btn btn-danger">ثبت </a>
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
                                            <a href="#" class="header-cart-info-submit btn btn-danger">ثبت سفارش </a>
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
@yield('content')

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
<script src="{{ asset('home/js/jquery-3.2.1.min.js') }}"></script>

<script src="{{ asset('home/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('home/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('home/js/popper.min.js') }}"></script>
<script src="{{ asset('home/js/bootstrap.js') }}"></script>
<script src="{{ asset('home/js/main.js') }}"></script>
<script src="{{ mix('/js/app.js') }}"></script>
<script src="{{ asset('home/js/jquery.ez-plus.js') }}"></script>
<script src="{{ asset('home/js/theia-sticky-sidebar.min.js') }}"></script>

@yield('scripts')
