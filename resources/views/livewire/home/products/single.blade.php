@extends('livewire.home.layouts.product')
@section('content')
    <div class="col-12">
        <div class="product-page">
            <article class="js-product">
                <div class="product-nav-container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb px-0">
                            <li class="breadcrumb-item"><a href="#">فروشگاه اینترنتی دیجی استور</a></li>
                            <li class="breadcrumb-item"><a href="#">کالای دیجیتال</a></li>
                            <li class="breadcrumb-item"><a href="#">موبایل</a></li>
                            <li class="breadcrumb-item active" aria-current="page">گوشی موبایل</li>
                        </ol>
                    </nav>
                    <div class="product-ext-links">
                        <a href="#" class="product-ext-link">کالای خود را در دیجی‌استور بفروشید <i
                                class="mdi mdi-storefront"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12 pull-right">
                    <div class="product-gallery">
                        <img class="zoom-img" id="img-product-zoom" src="{{ $product->image }}"
                            data-zoom-image="{{ $product->image }}" width="411" alt="img-slider" />
                        <div id="gallery_01f" style="width:420px;float:right;">
                            <ul class="gallery-items owl-carousel owl-theme" id="gallery-slider">
                                @foreach ($images as $picture)
                                    <li class="item">
                                        <a href="#" class="elevatezoom-gallery active" data-update=""
                                            data-image="{{ $picture->image }}" data-zoom-image="{{ $picture->image }}">
                                            <img src="{{ $picture->image }}" width="100" alt="img-slider" /></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="gallery-item">
                            <ul class="gallery-options">
                                <li class="option-wishes">
                                    <button class="btn-option btn-option-wishes">
                                        <i class="mdi mdi-heart-outline"></i>
                                        <span class="tooltip-short">افزودن به علاقه‌مندی</span>
                                    </button>
                                </li>
                                <li class="option-social">
                                    <button class="btn-option btn-option-social" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        <i class="mdi mdi-share-outline"></i>
                                        <span class="tooltip-short">اشتراک گذاری</span>
                                    </button>
                                </li>
                                <li class="option-alarm">
                                    <button class="btn-option btn-option-alarm" data-toggle="modal"
                                        data-target="#exampleModalCenteralarm">
                                        <i class="mdi mdi-bell-outline"></i>
                                        <span class="tooltip-short">اطلاع‌رسانی</span>
                                    </button>
                                </li>
                                <li class="option-alarm">
                                    <a href="product-comparison.html" class="btn-option btn-option-comparison">
                                        <i class="mdi mdi-compare"></i>
                                        <span class="tooltip-short">مقایسه</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Modal social-->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">اشتراک گذاری در شبکه های اجتماعی
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="form-share-row">
                                <div class="form-share-col">
                                    <ul class="btn-group-share">
                                        <li>
                                            <a href="#" class="btn-share btn-share-twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn-share btn-share-facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn-share btn-share-whatsapp">
                                                <i class="fa fa-whatsapp"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-share-title">ارسال به ایمیل</div>
                            <form for="#" class="send-to-email">
                                <div class="form-share-row">
                                    <div class="form-share-col">
                                        <input name="email" class="input-send-to-email" type="email"
                                            placeholder="آدرس ایمیل را وارد نمایید.">
                                    </div>
                                </div>
                                <div class="form-share-row">
                                    <div class="form-share-col">
                                        <div class="btn-send-email">ارسال</div>
                                    </div>
                                </div>
                            </form>
                            <div class="form-share-row">
                                <div class="form-share-col">
                                    <input class="ui-url-field" type="url"
                                        value="https://www.digikala.com/product/dkp-1672478" readonly="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal social-->
                <!-- Modal alarm -->
                <div class="modal fade" id="exampleModalCenteralarm" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                    به من اطلاع بده
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="#" class="form-notification">
                                    <div class="form-notification-title">اطلاع به من در زمان:</div>
                                    <div class="form-notification-row">
                                        <div class="form-notification-col">
                                            <div class="form-notification-status">
                                                پیشنهاد شگفت‌انگیز
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-notification-title">از طریق:</div>
                                    <div class="form-notification-row">
                                        <div class="form-notification-col">
                                            <ul class="form-notification-params">
                                                <li>
                                                    <div class="form-auth-row">
                                                        <label class="ui-checkbox">
                                                            <input type="checkbox" value="1" name="login"
                                                                id="remember1">
                                                            <span class="ui-checkbox-check"></span>
                                                        </label>
                                                        <label for="remember1" class="remember-me">ایمیل به
                                                            <span class="js-observed-user-email">09911234567</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-auth-row">
                                                        <label class="ui-checkbox">
                                                            <input type="checkbox" value="1" name="login"
                                                                id="remember2">
                                                            <span class="ui-checkbox-check"></span>
                                                        </label>
                                                        <label for="remember2" class="remember-me">پیامک به
                                                            <span class="js-observed-user-email">09911234567</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-auth-row">
                                                        <label class="ui-checkbox">
                                                            <input type="checkbox" value="1" name="login"
                                                                id="remember3">
                                                            <span class="ui-checkbox-check"></span>
                                                        </label>
                                                        <label for="remember3" class="remember-me">سیستم پیام شخصی
                                                            دیجی‌کالا </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer d-block text-right">
                                <button type="button" class="btn btn-primary ml-2">ثبت</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">بازگشت</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal alarm -->
                <div class="col-lg-8 col-md-12 col-xs-12 pull-left px-0">
                    <section class="product-info">
                        <div class="product-headline">
                            <div class="product-title-container">
                                <div class="product-directory">
                                    <ul class="mb-0">
                                        <li>
                                            @php
                                                $category1 = App\Models\Admin\products\Category::where('id', $product->level1_id)->first();
                                                $category2 = App\Models\Admin\products\Category::where('id', $product->level2_id)->first();
                                                $category3 = App\Models\Admin\products\Category::where('id', $product->level3_id)->first();
                                            @endphp
                                            <a href="{{ $category1->slug }}" class="link-border">
                                                {{ $category1->title }}
                                            </a>
                                        </li>
                                        <li>
                                            <span>/</span>
                                        </li>
                                        <li>
                                            <a href="{{ $category2->slug }}" class="link-border">
                                                {{ $category2->title }}
                                            </a>
                                        </li>
                                        <li>
                                            <span>/</span>
                                        </li>
                                        <li>
                                            <a href="{{ $category3->slug }}" class="link-border">
                                                {{ $category3->title }}
                                            </a>
                                        </li>
                                    </ul>
                                    <h1 class="product-title">{{ $product->title }}</h1>
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('product.add.cart') }}" method="post">
                            @csrf
                        <div class="product-attributes">
                            <div class="col-lg-8 col-md-8 col-xs-12 pull-right pr-0">
                                <div class="product-config">
                                    <span class="product-title-en">Xiaomi Redmi Note 10 M2101K7AG Dual SIM 128GB And 6GB
                                        RAM Mobile Phone</span>
                                    <div class="product-engagement">
                                        <div class="product-engagement-item">
                                            <div class="product-engagement-rating">۳.۷
                                                <span class="product-engagement-rating-num">
                                                    (۳)
                                                </span>
                                            </div>
                                        </div>
                                        <div class="product-engagement-item">
                                            <div class="product-engagement-set"></div>
                                            <div class="product-engagement-link" data-activate-tab="comments">
                                                ۸۱
                                                دیدگاه کاربران
                                            </div>
                                        </div>
                                        <div class="product-engagement-item">
                                            <div class="product-engagement-set"></div>
                                            <div class="product-engagement-link" data-activate-tab="questions">
                                                ۱۴
                                                پرسش و پاسخ
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-config-wrapper">
                                        <div class="product-variants">
                                            <span>انتخاب رنگ: </span>
                                            <ul>
                                                @foreach ($product->colors as $color)
                                                    <li class="js-c-ui-variant">
                                                        <label class="ui-variant-color">
                                                            <span class="ui-variant-shape"
                                                                style="background-color: {{ $color->value }}"></span>
                                                            <input type="radio" value="{{ $color->value }}"
                                                                name="color" id="variant" class="js-variant-selector"
                                                                checked="">
                                                            <span class="ui-variant-check"></span>
                                                        </label>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="product-params">
                                            <ul>
                                                <li class="title-product-features">
                                                    ویژگی‌های محصول
                                                </li>
                                                <li>
                                                    <span>حافظه داخلی: </span>
                                                    <span>128 گیگابایت</span>
                                                </li>
                                                <li>
                                                    <span>شبکه های ارتباطی: </span>
                                                    <span>2G،3G،4G</span>
                                                </li>
                                                <li>
                                                    <span>حس‌گرها: </span>
                                                    <span> قطب‌نما (Compass)،شتاب‌سنج (Accelerometer)،مجاورت
                                                        (Proximity)،ژیروسکوپ (Gyro)،اثرانگشت زیر صفحه نمایش
                                                        (FingerPrint|Under-Display)</span>
                                                </li>
                                                <li class="product-params-more">
                                                    <span>مقدار RAM:</span>
                                                    <span> 6 گیگابایت</span>
                                                </li>
                                                <li class="product-params-more">
                                                    <span>رزولوشن عکس: </span>
                                                    <span>48 مگاپیکسل</span>
                                                </li>
                                                <li class="product-params-more">
                                                    <span>باتری قابل تعویض: </span>
                                                    <span>خیر</span>
                                                </li>
                                                <li class="product-params-more">
                                                    <span>بازه‌ی اندازه صفحه نمایش: </span>
                                                    <span>6.43 اینچ و بزرگتر</span>
                                                </li>
                                                <li class="product-params-more">
                                                    <span>ویژگی‌های خاص: </span>
                                                    <span> مناسب عکاسی فبلت مجهز به حس‌گر اثرانگشت مناسب عکاسی
                                                        سلفی</span>
                                                </li>
                                                <li class="product-params-more">
                                                    <span>نسخه سیستم عامل: </span>
                                                    <span>Android 11</span>
                                                </li>
                                                <li class="product-params-more-handler">
                                                    <a href="#" class="link-border">
                                                        <span class="show-more">موارد بیشتر</span>
                                                        <span class="show-less">بستن</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="product-additional-info">
                                                <div class="product-additional-item">
                                                    <p>هشدار سامانه همتا: حتما در زمان تحویل دستگاه، به کمک کد فعال‌سازی
                                                        چاپ شده روی جعبه یا کارت گارانتی، دستگاه را از طریق #7777*، برای
                                                        سیم‌کارت خود فعال‌سازی کنید. آموزش تصویری در آدرس اینترنتی
                                                        hmti.ir/05
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-12 pull-left sticky-sidebar" style="padding:0">
                                <div class="product-seller-info">
                                    <div class="js-seller-info-changable">
                                        <div class="product-seller-row">
                                            <div class="product-seller-first-line d-inline-block">فروشنده:</div>
                                            <a href="#" class="js-seller-count-row">
                                                <span class="js-seller-count u-text-bold">۲</span>
                                                <span class="u-text-bold"> فروشنده</span>
                                                دیگر
                                            </a>
                                        </div>
                                        <div class="product-seller-row product-seller-row-guarantee">
                                            <div class="js-guarantee-text">گارانتی: {{ $product->garanty->title }}
                                                <i class="mdi mdi-check"></i>
                                            </div>
                                        </div>
                                        <div class="product-seller-row js-seller-info-shipment">
                                            <div class="js-guarantee-text">
                                                موجود در انبار فروشنده
                                                <i class="mdi mdi-content-save-outline"></i>
                                            </div>
                                            <div class="product-delivery-warehouse">آماده ارسال</div>
                                        </div>
                                        <div class="product-seller-row">
                                            <div class="product-seller-digiclub">
                                                <img src="assets/images/digiclub.png" alt="digiclub">
                                                <div>
                                                    <span>۱۵۰</span>
                                                    امتیاز دیجی‌کلاب
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-seller-row">
                                            <div class="product-seller-row-price">
                                                <div class="product-seller-price-label">
                                                    قیمت فروشنده
                                                </div>
                                                <div class="product-seller-price-real">
                                                    <div class="product-seller-price-prev">
                                                        {{ number_format($product->price) }}</div>
                                                    تومان
                                                </div>
                                            </div>
                                                <input type="hidden" value="{{ $product->id }}" name="id">
                                                <div class="product-seller-row-price">
                                                    <div class="product-seller-price-label">
                                                        تعداد:
                                                    </div>
                                                    <input type="number" name="number" value="1" class="form-control">
                                                </div>
                                                <div class="product-remaining-in-stock-parent">
                                                    <div class="cart-view-count">
                                                        <i class="mdi mdi-eye-outline"></i>
                                                        ۱۰+
                                                        نفر در حال بازدید این کالا می‌باشند.
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn-add-to-cart">
                                                    <span class="btn-add-to-cart-txt">افزودن
                                                        به سبد خرید
                                                    </span>
                                                </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                        <div class="product-feature-body">
                            <div class="product-feature">
                                <div class="row">
                                    <div class="product-feature-col">
                                        <a href="#" class="product-feature-item">
                                            <img src="{{ asset('home/images/footer-svg/delivery.svg') }}" alt="delivery">
                                            <span>امکان تحویل
                                                <br>
                                                اکسپرس
                                            </span>
                                        </a>
                                    </div>

                                    <div class="product-feature-col">
                                        <a href="#" class="product-feature-item">
                                            <img src="{{ asset('home/images/footer-svg/contact-us.svg') }}"
                                                alt="contact-us" style="width:35px;">
                                            <span>۷ روز هفته
                                                <br>
                                                ۲۴ ساعته
                                            </span>
                                        </a>
                                    </div>

                                    <div class="product-feature-col">
                                        <a href="#" class="product-feature-item">
                                            <img src="{{ asset('home/images/footer-svg/payment-terms.svg') }}"
                                                alt="payment-terms" style="width:35px;">
                                            <span>امکان
                                                <br>
                                                پرداخت در محل
                                            </span>
                                        </a>
                                    </div>

                                    <div class="product-feature-col">
                                        <a href="#" class="product-feature-item">
                                            <img src="{{ asset('home/images/footer-svg/origin-guarantee.svg') }}"
                                                alt="origin-guarantee" style="width:35px;">
                                            <span>ضمانت
                                                <br>
                                                اصل بودن کالا
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </article>

            <div class="box-suppliers">
                <div class="box-suppliers-headline-container">
                    <div class="headline-delivery">
                        <span>لیست فروشندگان این کالا</span>
                    </div>
                    <a href="#" class="link-border" style="float:left;">کالای خود را در دیجی‌استور بفروشید</a>
                </div>
                <div class="table-suppliers">
                    <div class="table-suppliers-body">
                        <div class="table-suppliers-row table-suppliers-row-active">
                            <div class="table-suppliers-cell table-suppliers-cell-title">
                                <div class="seller-wrapper">
                                    <p class="table-suppliers-seller-name">
                                        <span><a href="#">دیجی‌استور</a></span>
                                    </p>
                                    <div class="table-suppliers-rating">
                                        <div class="product-seller-second-line">
                                            عملکرد:
                                            <span class="u-text-bold">۵</span>
                                            از ۵
                                            <span class="u-divider"></span>
                                            <span class="u-text-bold">۸۳٪</span>
                                            رضایت از کالا
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-suppliers-cell table-suppliers-cell-no-lead-time">
                                <div class="seller-wrapper">
                                    <p>آماده ارسال</p>
                                </div>
                            </div>

                            <div class="table-suppliers-cell table-suppliers-cell-guarantee">
                                <div class="seller-wrapper">
                                    <span>گارانتی ۱۸ ماهه دیجی استور</span>
                                </div>
                            </div>

                            <div class="table-suppliers-cell table-suppliers-cell-price">
                                <div class="seller-wrapper">
                                    <div class="price-secondary">
                                        <div class="price-value">
                                            ۳,۲۱۵,۰۰۰
                                            <span class="price-currency">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-suppliers-cell table-suppliers-cell-action">
                                <div class="seller-wrapper">
                                    <a href="#" class="js-btn-add-to-cart">افزودن به سبد</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-suppliers-row">
                            <div class="table-suppliers-cell table-suppliers-cell-title">
                                <div class="seller-wrapper">
                                    <p class="table-suppliers-seller-name">
                                        <span><a href="#">دیجی‌استور</a></span>
                                    </p>
                                    <div class="table-suppliers-rating">
                                        <div class="product-seller-second-line">
                                            عملکرد:
                                            <span class="u-text-bold">۵</span>
                                            از ۵
                                            <span class="u-divider"></span>
                                            <span class="u-text-bold">۸۳٪</span>
                                            رضایت از کالا
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-suppliers-cell table-suppliers-cell-no-lead-time">
                                <div class="seller-wrapper">
                                    <p>آماده ارسال</p>
                                </div>
                            </div>

                            <div class="table-suppliers-cell table-suppliers-cell-guarantee">
                                <div class="seller-wrapper">
                                    <span>گارانتی ۱۸ ماهه دیجی استور</span>
                                </div>
                            </div>

                            <div class="table-suppliers-cell table-suppliers-cell-price">
                                <div class="seller-wrapper">
                                    <div class="price-secondary">
                                        <div class="price-value">
                                            ۳,۲۱۵,۰۰۰
                                            <span class="price-currency">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-suppliers-cell table-suppliers-cell-action">
                                <div class="seller-wrapper">
                                    <a href="#" class="js-btn-add-to-cart">افزودن به سبد</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-suppliers-row in-filter in-list">
                            <div class="table-suppliers-cell table-suppliers-cell-title">
                                <div class="seller-wrapper">
                                    <p class="table-suppliers-seller-name">
                                        <span><a href="#">دیجی‌استور</a></span>
                                    </p>
                                    <div class="table-suppliers-rating">
                                        <div class="product-seller-second-line">
                                            عملکرد:
                                            <span class="u-text-bold">۵</span>
                                            از ۵
                                            <span class="u-divider"></span>
                                            <span class="u-text-bold">۸۳٪</span>
                                            رضایت از کالا
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-suppliers-cell table-suppliers-cell-no-lead-time">
                                <div class="seller-wrapper">
                                    <p>آماده ارسال</p>
                                </div>
                            </div>

                            <div class="table-suppliers-cell table-suppliers-cell-guarantee">
                                <div class="seller-wrapper">
                                    <span>گارانتی ۱۸ ماهه دیجی استور</span>
                                </div>
                            </div>

                            <div class="table-suppliers-cell table-suppliers-cell-price">
                                <div class="seller-wrapper">
                                    <div class="price-secondary">
                                        <div class="price-value">
                                            ۳,۲۱۵,۰۰۰
                                            <span class="price-currency">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-suppliers-cell table-suppliers-cell-action">
                                <div class="seller-wrapper">
                                    <a href="#" class="js-btn-add-to-cart">افزودن به سبد</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-suppliers-row in-filter in-list">
                            <div class="table-suppliers-cell table-suppliers-cell-title">
                                <div class="seller-wrapper">
                                    <p class="table-suppliers-seller-name">
                                        <span><a href="#">دیجی‌استور</a></span>
                                    </p>
                                    <div class="table-suppliers-rating">
                                        <div class="product-seller-second-line">
                                            عملکرد:
                                            <span class="u-text-bold">۵</span>
                                            از ۵
                                            <span class="u-divider"></span>
                                            <span class="u-text-bold">۸۳٪</span>
                                            رضایت از کالا
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-suppliers-cell table-suppliers-cell-no-lead-time">
                                <div class="seller-wrapper">
                                    <p>آماده ارسال</p>
                                </div>
                            </div>

                            <div class="table-suppliers-cell table-suppliers-cell-guarantee">
                                <div class="seller-wrapper">
                                    <span>گارانتی ۱۸ ماهه دیجی استور</span>
                                </div>
                            </div>

                            <div class="table-suppliers-cell table-suppliers-cell-price">
                                <div class="seller-wrapper">
                                    <div class="price-secondary">
                                        <div class="price-value">
                                            ۳,۲۱۵,۰۰۰
                                            <span class="price-currency">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-suppliers-cell table-suppliers-cell-action">
                                <div class="seller-wrapper">
                                    <a href="#" class="js-btn-add-to-cart">افزودن به سبد</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-suppliers-more">
                            <a href="#" class="link-border">مشاهده
                                <span class="show-more more-suppliers-count">( فروشنــــده / گارانتی بیشتـــــر)
                                </span>
                                <span class="show-less">کمتر</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-xs-12 pull-right p-0">
                <div class="row">
                    <div class="col-12">
                        <div class="widget widget-product card">
                            <header class="card-header">
                                <span class="title-one">محصولات مرتبط</span>
                            </header>
                            <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2281px;">
                                        <div class="owl-item active" style="width: 315.75px; margin-left: 10px;">
                                            <div class="item">
                                                <a href="#">
                                                    <img src="assets/images/product-slider-2/111460776.jpg"
                                                        class="img-fluid" alt="img-slider">
                                                </a>
                                                <h2 class="post-title">
                                                    <a href="#">
                                                        گوشی موبایل سامسونگ مدل Galaxy A50 SM-A505F/DS دو ...
                                                    </a>
                                                </h2>
                                                <div class="price">
                                                    <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                                    <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 315.75px; margin-left: 10px;">
                                            <div class="item">
                                                <a href="#">
                                                    <img src="assets/images/product-slider-2/111474228.jpg"
                                                        class="img-fluid" alt="img-slider">
                                                </a>
                                                <h2 class="post-title">
                                                    <a href="#">
                                                        گوشی موبایل سامسونگ مدل Galaxy A10 SM-A105F/DS دو ...
                                                    </a>
                                                </h2>
                                                <div class="price">
                                                    <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                                    <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 315.75px; margin-left: 10px;">
                                            <div class="item">
                                                <a href="#">
                                                    <img src="assets/images/product-slider-2/112145268.jpg"
                                                        class="img-fluid" alt="img-slider">
                                                </a>
                                                <h2 class="post-title">
                                                    <a href="#">
                                                        گوشی موبایل سامسونگ مدل Galaxy A70 SM-A705FN/DS دو...
                                                    </a>
                                                </h2>
                                                <div class="price">
                                                    <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                                    <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 315.75px; margin-left: 10px;">
                                            <div class="item">
                                                <a href="#">
                                                    <img src="assets/images/product-slider-2/111475300.jpg"
                                                        class="img-fluid" alt="img-slider">
                                                </a>
                                                <h2 class="post-title">
                                                    <a href="#">
                                                        گوشی موبایل سامسونگ مدل Galaxy A30 SM-A305F/DS دو ...
                                                    </a>
                                                </h2>
                                                <div class="price">
                                                    <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                                    <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 315.75px; margin-left: 10px;">
                                            <div class="item">
                                                <a href="#">
                                                    <img src="assets/images/product-slider-2/113542184.jpg"
                                                        class="img-fluid" alt="img-slider">
                                                </a>
                                                <h2 class="post-title">
                                                    <a href="#">
                                                        گوشی موبایل اپل مدل iPhone 11 Pro Max A2218 دو سیم...
                                                    </a>
                                                </h2>
                                                <div class="price">
                                                    <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                                    <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 315.75px; margin-left: 10px;">
                                            <div class="item">
                                                <a href="#">
                                                    <img src="assets/images/product-slider-2/111469793.jpg"
                                                        class="img-fluid" alt="img-slider">
                                                </a>
                                                <h2 class="post-title">
                                                    <a href="#">
                                                        گوشی موبایل سامسونگ مدل Galaxy A20 SM-A205F/DS دو ...
                                                    </a>
                                                </h2>
                                                <div class="price">
                                                    <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                                    <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 315.75px; margin-left: 10px;">
                                            <div class="item">
                                                <a href="#">
                                                    <img src="assets/images/product-slider-2/111472656.jpg"
                                                        class="img-fluid" alt="img-slider">
                                                </a>
                                                <h2 class="post-title">
                                                    <a href="#">
                                                        گوشی موبایل سامسونگ مدل Samsung Galaxy S10 Plus SM...
                                                    </a>
                                                </h2>
                                                <div class="price">
                                                    <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                                    <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-tabs">
                <div class="col-lg-9 col-md-12 col-xs-12 pull-right p-0 res-w">
                    <div class="box-tabs-main">
                        <ul class="box-tabs">
                            <li class="box-tabs-tab active-tabs">
                                <a href="#"> نقد و بررسی</a>
                            </li>
                            <li class="box-tabs-tab">
                                <a href="#"> مشخصات</a>
                            </li>
                            <li class="box-tabs-tab">
                                <a href="#">نظرات کاربران</a>
                            </li>
                            <li class="box-tabs-tab">
                                <a href="#">پرسش و پاسخ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tabs-content">
                        <div class="tab-active-content">
                            <div class="tab content-expert" style="display:block;">
                                <article>
                                    <h2 class="params-headline">
                                        نقد و بررسی اجمالی
                                        <span>Xiaomi Redmi Note 10 M2101K7AG Dual SIM 128GB And 6GB RAM Mobile
                                            Phone</span>
                                    </h2>
                                    <section class="content-expert-summary">
                                        <div class="is-masked">
                                            <div class="mask-text-product-summary">
                                                {!! $product->body !!}
                                            </div>
                                            <a href="#" class="mask-handler">
                                                <span class="show-more">ادامه مطلب</span>
                                                <span class="show-less">بستن</span>
                                            </a>
                                            <div class="shadow-box"></div>
                                        </div>
                                    </section>
                                </article>
                                <section class="content-expert-stats row">
                                    <div class="col-8 pull-right">
                                        <div class="content-expert-stats-left">
                                            <div class="content-expert-evaluation">
                                                <div class="col-lg-5 col-md-5 col-xs-12 pull-right" style="padding:0;">
                                                    <div class="content-expert-evaluation-positive">
                                                        <span>نقاط قوت</span>
                                                        <ul>
                                                            <li>صفحه نمایش AMOLED </li>
                                                            <li>طراحی چشم‎نواز قاب پشتی</li>
                                                            <li>عملکرد مطلوب تراشه Exynos 9610 </li>
                                                            <li>طول عمر بالای باتری</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-md-5 col-xs-12 pull-right" style="padding:0;">
                                                    <div class="content-expert-evaluation-negative">
                                                        <span>نقاط ضعف</span>
                                                        <ul>
                                                            <li>مقاوم نبودن در برابر آب</li>
                                                            <li>عملکرد نه چندان خوب دوربین در شب</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>

                            <div class="tab params" style="display:none;">
                                <article>
                                    <h2 class="params-headline">
                                        مشخصات فنی
                                        <span>Xiaomi Redmi Note 10 M2101K7AG Dual SIM 128GB And 6GB RAM Mobile
                                            Phone</span>
                                    </h2>
                                    <section>
                                        <h3 class="params-title">مشخصات کلی</h3>
                                        <ul class="params-list">
                                            @foreach ($attributes as $attribute)
                                                <li>
                                                    <div class="col-lg-3 col-md-3 col-xs-12 pull-right"
                                                        style="padding:0;">
                                                        <div class="params-list-key">
                                                            <span class="block">
                                                                @php
                                                                    $title = \DB::connection('mysql-products')
                                                                        ->table('attributes')
                                                                        ->where('id', $attribute->attribute_id)
                                                                        ->first();
                                                                @endphp
                                                                {{ $title->title }}
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-9 col-md-9 col-xs-12 pull-left" style="padding:0;">
                                                        <div class="params-list-value">
                                                            <span class="block">
                                                                @php
                                                                    $value = \DB::connection('mysql-products')
                                                                        ->table('attribute_values')
                                                                        ->where('id', $attribute->value_id)
                                                                        ->first();
                                                                @endphp
                                                                {{ $value->value }}
                                                            </span>
                                                        </div>
                                                    </div>

                                                </li>
                                            @endforeach


                                        </ul>
                                    </section>

                                </article>
                            </div>
                            <div class="tab comments" style="display:none;">
                                <h2 class="comments-headline">امتیاز کاربران به:
                                    <span>
                                        <span>Xiaomi Redmi Note 10 M2101K7AG Dual SIM 128GB And 6GB RAM Mobile
                                            Phone</span>
                                    </span>
                                </h2>
                                <div class="comments-summary">
                                    <div class="col-lg-3 col-md-3 col-xs-12 pull-right sticky-sidebar">
                                        <div class="comments-summary-box">
                                            <div class="comments-side-rating-container">
                                                <div class="comments-side-rating">
                                                    <div class="comments-side-rating-main">۳.۷</div>
                                                    <div class="comments-side-rating-desc">از ۵</div>
                                                </div>
                                                <div class="comments-side-rating-bottom">
                                                    <div class="product-star mb-3">
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="comments-side-rating-all">
                                                        از مجموع ۸۳ امتیاز
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="comments-item-rating">
                                                <li>
                                                    <div class="cell">کیفیت ساخت:</div>
                                                    <div class="cell-2">
                                                        <div class="rating rating-general js-rating">
                                                            <div class="rating-rate"></div>
                                                        </div>
                                                        <span class="rating-overall-word">۳.۷</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="cell">ارزش خرید به نسبت قیمت:</div>
                                                    <div class="cell-2">
                                                        <div class="rating rating-general js-rating">
                                                            <div class="rating-rate"></div>
                                                        </div>
                                                        <span class="rating-overall-word">۳.۷</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="cell">نوآوری:</div>
                                                    <div class="cell-2">
                                                        <div class="rating rating-general js-rating">
                                                            <div class="rating-rate"></div>
                                                        </div>
                                                        <span class="rating-overall-word">۳.۷</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="cell">امکانات و قابلیت ها:</div>
                                                    <div class="cell-2">
                                                        <div class="rating rating-general js-rating">
                                                            <div class="rating-rate"></div>
                                                        </div>
                                                        <span class="rating-overall-word">۳.۷</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="cell">سهولت استفاده:</div>
                                                    <div class="cell-2">
                                                        <div class="rating rating-general js-rating">
                                                            <div class="rating-rate"></div>
                                                        </div>
                                                        <span class="rating-overall-word">۳.۷</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="cell">طراحی و ظاهر:</div>
                                                    <div class="cell-2">
                                                        <div class="rating rating-general js-rating">
                                                            <div class="rating-rate"></div>
                                                        </div>
                                                        <span class="rating-overall-word">۳.۷</span>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>

                                        <div class="comments-summary-note">
                                            <span>دیدگاه خود را درباره این کالا بیان کنید</span>
                                            <div class="parent-btn">
                                                <button class="dk-btn dk-btn-info">
                                                    افزودن نظر جدید
                                                    <i class="fa fa-comments sign-in"></i>
                                                </button>
                                            </div>
                                            <div class="comments-dc-touch">
                                                <div class="comments-dc-touch-title">۵ امتیاز دیجی‌کلاب</div>
                                                <div class="comments-dc-touch-desc">با بیان دیدگاه برای این کالا دریافت
                                                    کنید</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-xs-12 pull-left">
                                        <div class="comments-filter">
                                            <div class="filter-item-main">
                                                <ul class="filter-items nav nav-tabs" id="myTab" role="tablist">
                                                    <li>
                                                        <span class="sort-row-text"><i class="mdi mdi-sort"></i>
                                                            مرتب‌سازی
                                                            دیدگاه‌ها بر اساس:</span>
                                                    </li>
                                                    <li class="filter-items-active nav-item">
                                                        <a class="nav-link active" id="Buyerscomments-tab"
                                                            data-toggle="tab" href="#Buyerscomments" role="tab"
                                                            aria-controls="Buyerscomments" aria-selected="true">نظر
                                                            خریداران</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="Usefulcomments-tab" data-toggle="tab"
                                                            href="#Usefulcomments" role="tab"
                                                            aria-controls="Usefulcomments" aria-selected="true">مفیدترین
                                                            نظرات</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="Newscomments-tab" data-toggle="tab"
                                                            href="#Newscomments" role="tab"
                                                            aria-controls="Newscomments" aria-selected="true">جدیدترین
                                                            نظرات</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div id="product-comment-list">
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="Buyerscomments"
                                                    role="tabpanel" aria-labelledby="Buyerscomments-tab">
                                                    <ul class="comments-list">
                                                        <li>
                                                            <section>
                                                                <div class="col-lg-4 col-md-5 col-xs-12 pull-right">
                                                                    <div class="aside">
                                                                        <div class="message-light">
                                                                            <span class="mdi mdi-cart"></span>
                                                                            خریدار این محصول
                                                                        </div>
                                                                        <ul class="comments-user-shopping">
                                                                            <li>
                                                                                <div class="cell">رنگ خریداری شده:</div>
                                                                                <div class="color-cell">
                                                                                    <span
                                                                                        class="shopping-color-value"></span>آبی
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">خریداری شده از:</div>
                                                                                <div class="color-cell">
                                                                                    <span class="mdi mdi-home"></span>
                                                                                    <a href="#"
                                                                                        class="link-border">دی
                                                                                        جی لند
                                                                                        پلاس</a>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">قیمت خرید:</div>
                                                                                <div class="bought-price">۴,۳۷۵,۰۰۰تومان
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">تاریخ خرید:</div>
                                                                                <div class="bought-price">بیش از سه ماه
                                                                                    پیش
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="message-light opinion-positive">
                                                                            <span class="fa fa-thumbs-o-up"></span>
                                                                            خریدار این محصول
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-8 col-md-7 col-xs-12 pull-left">
                                                                    <div class="article">
                                                                        <div class="header">
                                                                            <div>
                                                                                ارسال رم 4 بجای رم 6
                                                                                <span>توسط حمید متقی پیشه در تاریخ ۱۳ خرداد
                                                                                    ۱۳۹۸</span>
                                                                            </div>
                                                                        </div>
                                                                        <p>
                                                                            از دیجیکالا خواهش میکنم زمان ثبت مشخصات، دقت
                                                                            لازم رو
                                                                            داشته
                                                                            باشند...<br>
                                                                            این گوشی، گوشی بسیار خوبی هست، اما من زمانی
                                                                            که توی
                                                                            مشخصات
                                                                            نوشته
                                                                            بود رم 6 هست، خریدمش! اما پس از ارسال، رمش 4
                                                                            بود که
                                                                            از پست
                                                                            تحویل
                                                                            نگرفتم و مرجوعش کردم! هزینه ش فقط زمانی بود
                                                                            که از
                                                                            دست رفت!
                                                                            وقتی
                                                                            میتونستم داخل شهر رم 4ش رو با قیمتی بسیار
                                                                            کمتر
                                                                            بخرم!<br>
                                                                            انشالله سری بعد در ثبت مشخصات کالا دقت لازم
                                                                            بکار
                                                                            گرفته
                                                                            شود...
                                                                        </p>
                                                                        <div class="footer">
                                                                            <div class="comment-like-container">آیا این
                                                                                نظر
                                                                                برایتان مفید
                                                                                بود؟
                                                                                <button class="btn-like"
                                                                                    data-counter="۱,۵۲۸">بله</button>
                                                                                <button class="btn-like"
                                                                                    data-counter="۷۹">خیر</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                            <section>
                                                                <div class="col-lg-4 col-md-5 col-xs-12 pull-right">
                                                                    <div class="aside">
                                                                        <div class="message-light">
                                                                            <span class="mdi mdi-cart"></span>
                                                                            خریدار این محصول
                                                                        </div>
                                                                        <ul class="comments-user-shopping">
                                                                            <li>
                                                                                <div class="cell">رنگ خریداری شده:</div>
                                                                                <div class="color-cell">
                                                                                    <span
                                                                                        class="shopping-color-value"></span>آبی
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">خریداری شده از:</div>
                                                                                <div class="color-cell">
                                                                                    <span class="mdi mdi-home"></span>
                                                                                    <a href="#"
                                                                                        class="link-border">دی
                                                                                        جی لند
                                                                                        پلاس</a>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">قیمت خرید:</div>
                                                                                <div class="bought-price">۴,۳۷۵,۰۰۰تومان
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">تاریخ خرید:</div>
                                                                                <div class="bought-price">بیش از سه ماه
                                                                                    پیش
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="message-light opinion-positive">
                                                                            <span class="fa fa-thumbs-o-up"></span>
                                                                            خریدار این محصول
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-8 col-md-7 col-xs-12 pull-left">
                                                                    <div class="article">
                                                                        <div class="header">
                                                                            <div>
                                                                                ارسال رم 4 بجای رم 6
                                                                                <span>توسط حمید متقی پیشه در تاریخ ۱۳ خرداد
                                                                                    ۱۳۹۸</span>
                                                                            </div>
                                                                        </div>
                                                                        <p>
                                                                            از دیجیکالا خواهش میکنم زمان ثبت مشخصات، دقت
                                                                            لازم رو
                                                                            داشته
                                                                            باشند...<br>
                                                                            این گوشی، گوشی بسیار خوبی هست، اما من زمانی
                                                                            که توی
                                                                            مشخصات
                                                                            نوشته
                                                                            بود رم 6 هست، خریدمش! اما پس از ارسال، رمش 4
                                                                            بود که
                                                                            از پست
                                                                            تحویل
                                                                            نگرفتم و مرجوعش کردم! هزینه ش فقط زمانی بود
                                                                            که از
                                                                            دست رفت!
                                                                            وقتی
                                                                            میتونستم داخل شهر رم 4ش رو با قیمتی بسیار
                                                                            کمتر
                                                                            بخرم!<br>
                                                                            انشالله سری بعد در ثبت مشخصات کالا دقت لازم
                                                                            بکار
                                                                            گرفته
                                                                            شود...
                                                                        </p>
                                                                        <div class="footer">
                                                                            <div class="comment-like-container">آیا این
                                                                                نظر
                                                                                برایتان مفید
                                                                                بود؟
                                                                                <button class="btn-like"
                                                                                    data-counter="۱,۵۲۸">بله</button>
                                                                                <button class="btn-like"
                                                                                    data-counter="۷۹">خیر</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                            <section>
                                                                <div class="col-lg-4 col-md-5 col-xs-12 pull-right">
                                                                    <div class="aside">
                                                                        <div class="message-light">
                                                                            <span class="mdi mdi-cart"></span>
                                                                            خریدار این محصول
                                                                        </div>
                                                                        <ul class="comments-user-shopping">
                                                                            <li>
                                                                                <div class="cell">رنگ خریداری شده:</div>
                                                                                <div class="color-cell">
                                                                                    <span
                                                                                        class="shopping-color-value"></span>آبی
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">خریداری شده از:</div>
                                                                                <div class="color-cell">
                                                                                    <span class="mdi mdi-home"></span>
                                                                                    <a href="#"
                                                                                        class="link-border">دی
                                                                                        جی لند
                                                                                        پلاس</a>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">قیمت خرید:</div>
                                                                                <div class="bought-price">۴,۳۷۵,۰۰۰تومان
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">تاریخ خرید:</div>
                                                                                <div class="bought-price">بیش از سه ماه
                                                                                    پیش
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="message-light opinion-positive">
                                                                            <span class="fa fa-thumbs-o-up"></span>
                                                                            خریدار این محصول
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-8 col-md-7 col-xs-12 pull-left">
                                                                    <div class="article">
                                                                        <div class="header">
                                                                            <div>
                                                                                ارسال رم 4 بجای رم 6
                                                                                <span>توسط حمید متقی پیشه در تاریخ ۱۳ خرداد
                                                                                    ۱۳۹۸</span>
                                                                            </div>
                                                                        </div>
                                                                        <p>
                                                                            از دیجیکالا خواهش میکنم زمان ثبت مشخصات، دقت
                                                                            لازم رو
                                                                            داشته
                                                                            باشند...<br>
                                                                            این گوشی، گوشی بسیار خوبی هست، اما من زمانی
                                                                            که توی
                                                                            مشخصات
                                                                            نوشته
                                                                            بود رم 6 هست، خریدمش! اما پس از ارسال، رمش 4
                                                                            بود که
                                                                            از پست
                                                                            تحویل
                                                                            نگرفتم و مرجوعش کردم! هزینه ش فقط زمانی بود
                                                                            که از
                                                                            دست رفت!
                                                                            وقتی
                                                                            میتونستم داخل شهر رم 4ش رو با قیمتی بسیار
                                                                            کمتر
                                                                            بخرم!<br>
                                                                            انشالله سری بعد در ثبت مشخصات کالا دقت لازم
                                                                            بکار
                                                                            گرفته
                                                                            شود...
                                                                        </p>
                                                                        <div class="footer">
                                                                            <div class="comment-like-container">آیا این
                                                                                نظر
                                                                                برایتان مفید
                                                                                بود؟
                                                                                <button class="btn-like"
                                                                                    data-counter="۱,۵۲۸">بله</button>
                                                                                <button class="btn-like"
                                                                                    data-counter="۷۹">خیر</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane fade" id="Usefulcomments" role="tabpanel"
                                                    aria-labelledby="Usefulcomments-tab">
                                                    <ul class="comments-list">
                                                        <li>
                                                            <section>
                                                                <div class="col-lg-4 col-md-5 col-xs-12 pull-right">
                                                                    <div class="aside">
                                                                        <div class="message-light">
                                                                            <span class="mdi mdi-cart"></span>
                                                                            خریدار این محصول
                                                                        </div>
                                                                        <ul class="comments-user-shopping">
                                                                            <li>
                                                                                <div class="cell">رنگ خریداری شده:</div>
                                                                                <div class="color-cell">
                                                                                    <span
                                                                                        class="shopping-color-value"></span>آبی
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">خریداری شده از:</div>
                                                                                <div class="color-cell">
                                                                                    <span class="mdi mdi-home"></span>
                                                                                    <a href="#"
                                                                                        class="link-border">دی
                                                                                        جی لند
                                                                                        پلاس</a>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">قیمت خرید:</div>
                                                                                <div class="bought-price">۴,۳۷۵,۰۰۰تومان
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">تاریخ خرید:</div>
                                                                                <div class="bought-price">بیش از سه ماه
                                                                                    پیش
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="message-light opinion-positive">
                                                                            <span class="fa fa-thumbs-o-up"></span>
                                                                            خریدار این محصول
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-8 col-md-7 col-xs-12 pull-left">
                                                                    <div class="article">
                                                                        <div class="header">
                                                                            <div>
                                                                                ارسال رم 4 بجای رم 6
                                                                                <span>توسط حمید متقی پیشه در تاریخ ۱۳ خرداد
                                                                                    ۱۳۹۸</span>
                                                                            </div>
                                                                        </div>
                                                                        <p>
                                                                            از دیجیکالا خواهش میکنم زمان ثبت مشخصات، دقت
                                                                            لازم رو
                                                                            داشته
                                                                            باشند...<br>
                                                                            این گوشی، گوشی بسیار خوبی هست، اما من زمانی
                                                                            که توی
                                                                            مشخصات
                                                                            نوشته
                                                                            بود رم 6 هست، خریدمش! اما پس از ارسال، رمش 4
                                                                            بود که
                                                                            از پست
                                                                            تحویل
                                                                            نگرفتم و مرجوعش کردم! هزینه ش فقط زمانی بود
                                                                            که از
                                                                            دست رفت!
                                                                            وقتی
                                                                            میتونستم داخل شهر رم 4ش رو با قیمتی بسیار
                                                                            کمتر
                                                                            بخرم!<br>
                                                                            انشالله سری بعد در ثبت مشخصات کالا دقت لازم
                                                                            بکار
                                                                            گرفته
                                                                            شود...
                                                                        </p>
                                                                        <div class="footer">
                                                                            <div class="comment-like-container">آیا این
                                                                                نظر
                                                                                برایتان مفید
                                                                                بود؟
                                                                                <button class="btn-like"
                                                                                    data-counter="۱,۵۲۸">بله</button>
                                                                                <button class="btn-like"
                                                                                    data-counter="۷۹">خیر</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                            <section>
                                                                <div class="col-lg-4 col-md-5 col-xs-12 pull-right">
                                                                    <div class="aside">
                                                                        <div class="message-light">
                                                                            <span class="mdi mdi-cart"></span>
                                                                            خریدار این محصول
                                                                        </div>
                                                                        <ul class="comments-user-shopping">
                                                                            <li>
                                                                                <div class="cell">رنگ خریداری شده:</div>
                                                                                <div class="color-cell">
                                                                                    <span
                                                                                        class="shopping-color-value"></span>آبی
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">خریداری شده از:</div>
                                                                                <div class="color-cell">
                                                                                    <span class="mdi mdi-home"></span>
                                                                                    <a href="#"
                                                                                        class="link-border">دی
                                                                                        جی لند
                                                                                        پلاس</a>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">قیمت خرید:</div>
                                                                                <div class="bought-price">۴,۳۷۵,۰۰۰تومان
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">تاریخ خرید:</div>
                                                                                <div class="bought-price">بیش از سه ماه
                                                                                    پیش
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="message-light opinion-positive">
                                                                            <span class="fa fa-thumbs-o-up"></span>
                                                                            خریدار این محصول
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-8 col-md-7 col-xs-12 pull-left">
                                                                    <div class="article">
                                                                        <div class="header">
                                                                            <div>
                                                                                ارسال رم 4 بجای رم 6
                                                                                <span>توسط حمید متقی پیشه در تاریخ ۱۳ خرداد
                                                                                    ۱۳۹۸</span>
                                                                            </div>
                                                                        </div>
                                                                        <p>
                                                                            از دیجیکالا خواهش میکنم زمان ثبت مشخصات، دقت
                                                                            لازم رو
                                                                            داشته
                                                                            باشند...<br>
                                                                            این گوشی، گوشی بسیار خوبی هست، اما من زمانی
                                                                            که توی
                                                                            مشخصات
                                                                            نوشته
                                                                            بود رم 6 هست، خریدمش! اما پس از ارسال، رمش 4
                                                                            بود که
                                                                            از پست
                                                                            تحویل
                                                                            نگرفتم و مرجوعش کردم! هزینه ش فقط زمانی بود
                                                                            که از
                                                                            دست رفت!
                                                                            وقتی
                                                                            میتونستم داخل شهر رم 4ش رو با قیمتی بسیار
                                                                            کمتر
                                                                            بخرم!<br>
                                                                            انشالله سری بعد در ثبت مشخصات کالا دقت لازم
                                                                            بکار
                                                                            گرفته
                                                                            شود...
                                                                        </p>
                                                                        <div class="footer">
                                                                            <div class="comment-like-container">آیا این
                                                                                نظر
                                                                                برایتان مفید
                                                                                بود؟
                                                                                <button class="btn-like"
                                                                                    data-counter="۱,۵۲۸">بله</button>
                                                                                <button class="btn-like"
                                                                                    data-counter="۷۹">خیر</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                            <section>
                                                                <div class="col-lg-4 col-md-5 col-xs-12 pull-right">
                                                                    <div class="aside">
                                                                        <div class="message-light">
                                                                            <span class="mdi mdi-cart"></span>
                                                                            خریدار این محصول
                                                                        </div>
                                                                        <ul class="comments-user-shopping">
                                                                            <li>
                                                                                <div class="cell">رنگ خریداری شده:</div>
                                                                                <div class="color-cell">
                                                                                    <span
                                                                                        class="shopping-color-value"></span>آبی
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">خریداری شده از:</div>
                                                                                <div class="color-cell">
                                                                                    <span class="mdi mdi-home"></span>
                                                                                    <a href="#"
                                                                                        class="link-border">دی
                                                                                        جی لند
                                                                                        پلاس</a>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">قیمت خرید:</div>
                                                                                <div class="bought-price">۴,۳۷۵,۰۰۰تومان
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">تاریخ خرید:</div>
                                                                                <div class="bought-price">بیش از سه ماه
                                                                                    پیش
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="message-light opinion-positive">
                                                                            <span class="fa fa-thumbs-o-up"></span>
                                                                            خریدار این محصول
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-8 col-md-7 col-xs-12 pull-left">
                                                                    <div class="article">
                                                                        <div class="header">
                                                                            <div>
                                                                                ارسال رم 4 بجای رم 6
                                                                                <span>توسط حمید متقی پیشه در تاریخ ۱۳ خرداد
                                                                                    ۱۳۹۸</span>
                                                                            </div>
                                                                        </div>
                                                                        <p>
                                                                            از دیجیکالا خواهش میکنم زمان ثبت مشخصات، دقت
                                                                            لازم رو
                                                                            داشته
                                                                            باشند...<br>
                                                                            این گوشی، گوشی بسیار خوبی هست، اما من زمانی
                                                                            که توی
                                                                            مشخصات
                                                                            نوشته
                                                                            بود رم 6 هست، خریدمش! اما پس از ارسال، رمش 4
                                                                            بود که
                                                                            از پست
                                                                            تحویل
                                                                            نگرفتم و مرجوعش کردم! هزینه ش فقط زمانی بود
                                                                            که از
                                                                            دست رفت!
                                                                            وقتی
                                                                            میتونستم داخل شهر رم 4ش رو با قیمتی بسیار
                                                                            کمتر
                                                                            بخرم!<br>
                                                                            انشالله سری بعد در ثبت مشخصات کالا دقت لازم
                                                                            بکار
                                                                            گرفته
                                                                            شود...
                                                                        </p>
                                                                        <div class="footer">
                                                                            <div class="comment-like-container">آیا این
                                                                                نظر
                                                                                برایتان مفید
                                                                                بود؟
                                                                                <button class="btn-like"
                                                                                    data-counter="۱,۵۲۸">بله</button>
                                                                                <button class="btn-like"
                                                                                    data-counter="۷۹">خیر</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane fade" id="Newscomments" role="tabpanel"
                                                    aria-labelledby="Newscomments-tab">
                                                    <ul class="comments-list">
                                                        <li>
                                                            <section>
                                                                <div class="col-lg-4 col-md-5 col-xs-12 pull-right">
                                                                    <div class="aside">
                                                                        <div class="message-light">
                                                                            <span class="mdi mdi-cart"></span>
                                                                            خریدار این محصول
                                                                        </div>
                                                                        <ul class="comments-user-shopping">
                                                                            <li>
                                                                                <div class="cell">رنگ خریداری شده:</div>
                                                                                <div class="color-cell">
                                                                                    <span
                                                                                        class="shopping-color-value"></span>آبی
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">خریداری شده از:</div>
                                                                                <div class="color-cell">
                                                                                    <span class="mdi mdi-home"></span>
                                                                                    <a href="#"
                                                                                        class="link-border">دی
                                                                                        جی لند
                                                                                        پلاس</a>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">قیمت خرید:</div>
                                                                                <div class="bought-price">۴,۳۷۵,۰۰۰تومان
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">تاریخ خرید:</div>
                                                                                <div class="bought-price">بیش از سه ماه
                                                                                    پیش
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="message-light opinion-positive">
                                                                            <span class="fa fa-thumbs-o-up"></span>
                                                                            خریدار این محصول
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-8 col-md-7 col-xs-12 pull-left">
                                                                    <div class="article">
                                                                        <div class="header">
                                                                            <div>
                                                                                ارسال رم 4 بجای رم 6
                                                                                <span>توسط حمید متقی پیشه در تاریخ ۱۳ خرداد
                                                                                    ۱۳۹۸</span>
                                                                            </div>
                                                                        </div>
                                                                        <p>
                                                                            از دیجیکالا خواهش میکنم زمان ثبت مشخصات، دقت
                                                                            لازم رو
                                                                            داشته
                                                                            باشند...<br>
                                                                            این گوشی، گوشی بسیار خوبی هست، اما من زمانی
                                                                            که توی
                                                                            مشخصات
                                                                            نوشته
                                                                            بود رم 6 هست، خریدمش! اما پس از ارسال، رمش 4
                                                                            بود که
                                                                            از پست
                                                                            تحویل
                                                                            نگرفتم و مرجوعش کردم! هزینه ش فقط زمانی بود
                                                                            که از
                                                                            دست رفت!
                                                                            وقتی
                                                                            میتونستم داخل شهر رم 4ش رو با قیمتی بسیار
                                                                            کمتر
                                                                            بخرم!<br>
                                                                            انشالله سری بعد در ثبت مشخصات کالا دقت لازم
                                                                            بکار
                                                                            گرفته
                                                                            شود...
                                                                        </p>
                                                                        <div class="footer">
                                                                            <div class="comment-like-container">آیا این
                                                                                نظر
                                                                                برایتان مفید
                                                                                بود؟
                                                                                <button class="btn-like"
                                                                                    data-counter="۱,۵۲۸">بله</button>
                                                                                <button class="btn-like"
                                                                                    data-counter="۷۹">خیر</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                            <section>
                                                                <div class="col-lg-4 col-md-5 col-xs-12 pull-right">
                                                                    <div class="aside">
                                                                        <div class="message-light">
                                                                            <span class="mdi mdi-cart"></span>
                                                                            خریدار این محصول
                                                                        </div>
                                                                        <ul class="comments-user-shopping">
                                                                            <li>
                                                                                <div class="cell">رنگ خریداری شده:</div>
                                                                                <div class="color-cell">
                                                                                    <span
                                                                                        class="shopping-color-value"></span>آبی
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">خریداری شده از:</div>
                                                                                <div class="color-cell">
                                                                                    <span class="mdi mdi-home"></span>
                                                                                    <a href="#"
                                                                                        class="link-border">دی
                                                                                        جی لند
                                                                                        پلاس</a>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">قیمت خرید:</div>
                                                                                <div class="bought-price">۴,۳۷۵,۰۰۰تومان
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">تاریخ خرید:</div>
                                                                                <div class="bought-price">بیش از سه ماه
                                                                                    پیش
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="message-light opinion-positive">
                                                                            <span class="fa fa-thumbs-o-up"></span>
                                                                            خریدار این محصول
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-8 col-md-7 col-xs-12 pull-left">
                                                                    <div class="article">
                                                                        <div class="header">
                                                                            <div>
                                                                                ارسال رم 4 بجای رم 6
                                                                                <span>توسط حمید متقی پیشه در تاریخ ۱۳ خرداد
                                                                                    ۱۳۹۸</span>
                                                                            </div>
                                                                        </div>
                                                                        <p>
                                                                            از دیجیکالا خواهش میکنم زمان ثبت مشخصات، دقت
                                                                            لازم رو
                                                                            داشته
                                                                            باشند...<br>
                                                                            این گوشی، گوشی بسیار خوبی هست، اما من زمانی
                                                                            که توی
                                                                            مشخصات
                                                                            نوشته
                                                                            بود رم 6 هست، خریدمش! اما پس از ارسال، رمش 4
                                                                            بود که
                                                                            از پست
                                                                            تحویل
                                                                            نگرفتم و مرجوعش کردم! هزینه ش فقط زمانی بود
                                                                            که از
                                                                            دست رفت!
                                                                            وقتی
                                                                            میتونستم داخل شهر رم 4ش رو با قیمتی بسیار
                                                                            کمتر
                                                                            بخرم!<br>
                                                                            انشالله سری بعد در ثبت مشخصات کالا دقت لازم
                                                                            بکار
                                                                            گرفته
                                                                            شود...
                                                                        </p>
                                                                        <div class="footer">
                                                                            <div class="comment-like-container">آیا این
                                                                                نظر
                                                                                برایتان مفید
                                                                                بود؟
                                                                                <button class="btn-like"
                                                                                    data-counter="۱,۵۲۸">بله</button>
                                                                                <button class="btn-like"
                                                                                    data-counter="۷۹">خیر</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                            <section>
                                                                <div class="col-lg-4 col-md-5 col-xs-12 pull-right">
                                                                    <div class="aside">
                                                                        <div class="message-light">
                                                                            <span class="mdi mdi-cart"></span>
                                                                            خریدار این محصول
                                                                        </div>
                                                                        <ul class="comments-user-shopping">
                                                                            <li>
                                                                                <div class="cell">رنگ خریداری شده:</div>
                                                                                <div class="color-cell">
                                                                                    <span
                                                                                        class="shopping-color-value"></span>آبی
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">خریداری شده از:</div>
                                                                                <div class="color-cell">
                                                                                    <span class="mdi mdi-home"></span>
                                                                                    <a href="#"
                                                                                        class="link-border">دی
                                                                                        جی لند
                                                                                        پلاس</a>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">قیمت خرید:</div>
                                                                                <div class="bought-price">۴,۳۷۵,۰۰۰تومان
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">تاریخ خرید:</div>
                                                                                <div class="bought-price">بیش از سه ماه
                                                                                    پیش
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="message-light opinion-positive">
                                                                            <span class="fa fa-thumbs-o-up"></span>
                                                                            خریدار این محصول
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-8 col-md-7 col-xs-12 pull-left">
                                                                    <div class="article">
                                                                        <div class="header">
                                                                            <div>
                                                                                ارسال رم 4 بجای رم 6
                                                                                <span>توسط حمید متقی پیشه در تاریخ ۱۳ خرداد
                                                                                    ۱۳۹۸</span>
                                                                            </div>
                                                                        </div>
                                                                        <p>
                                                                            از دیجیکالا خواهش میکنم زمان ثبت مشخصات، دقت
                                                                            لازم رو
                                                                            داشته
                                                                            باشند...<br>
                                                                            این گوشی، گوشی بسیار خوبی هست، اما من زمانی
                                                                            که توی
                                                                            مشخصات
                                                                            نوشته
                                                                            بود رم 6 هست، خریدمش! اما پس از ارسال، رمش 4
                                                                            بود که
                                                                            از پست
                                                                            تحویل
                                                                            نگرفتم و مرجوعش کردم! هزینه ش فقط زمانی بود
                                                                            که از
                                                                            دست رفت!
                                                                            وقتی
                                                                            میتونستم داخل شهر رم 4ش رو با قیمتی بسیار
                                                                            کمتر
                                                                            بخرم!<br>
                                                                            انشالله سری بعد در ثبت مشخصات کالا دقت لازم
                                                                            بکار
                                                                            گرفته
                                                                            شود...
                                                                        </p>
                                                                        <div class="footer">
                                                                            <div class="comment-like-container">آیا این
                                                                                نظر
                                                                                برایتان مفید
                                                                                بود؟
                                                                                <button class="btn-like"
                                                                                    data-counter="۱,۵۲۸">بله</button>
                                                                                <button class="btn-like"
                                                                                    data-counter="۷۹">خیر</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab js-faq-container" style="display:none;">
                                <div class="faq-headline">پرسش و پاسخ
                                    <span>Xiaomi Redmi Note 10 M2101K7AG Dual SIM 128GB And 6GB RAM Mobile
                                        Phone</span>
                                </div>
                                <form action="#" class="form-faq">
                                    <div class="form-faq-row">
                                        <div class="form-faq-col">
                                            <div class="ui-textarea">
                                                <textarea name="Question-Text" title="متن سوال" class="ui-textarea-field"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-faq-row">
                                        <div class="form-faq-col form-faq-col-submit">
                                            <button class="btn-tertiary">ثبت پرسش</button>
                                        </div>
                                        <div class="account-agree">
                                            <label class="checkbox-primary">
                                                <span class="checkbox-check checkbox-custom-pic"></span>
                                                <input type="checkbox" id="accountAutoLogin" class="remember-checkbox">
                                            </label>
                                            <label for="accountAutoLogin" class="remember-me">
                                            </label>

                                        </div>
                                        <div class="form-auth-row form-auth-row-product">
                                            <label class="ui-checkbox">
                                                <input type="checkbox" value="1" name="login" checked=""
                                                    id="remember">
                                                <span class="ui-checkbox-check"></span>
                                            </label>
                                            <label for="remember" class="remember-me">
                                                اولین پاسخی که به پرسش من داده شد، از طریق ایمیل به من اطلاع دهید.
                                                <br>
                                                با انتخاب دکمه “ثبت پرسش”، موافقت خود را با
                                                <a href="#" class="link-border">قوانین انتشار محتوا</a>
                                                در دیجی
                                                کالا اعلام می کنم.
                                            </label>
                                        </div>
                                    </div>
                                </form>
                                <div class="col-lg-9 col-md-9 col-xs-12 pull-left">
                                    <div class="faq-filter">
                                        <div class="filter-item-main">
                                            <ul class="filter-items nav nav-tabs" id="myTab1" role="tablist">
                                                <li>
                                                    <span class="sort-row-text"><i class="mdi mdi-sort"></i> مرتب‌سازی
                                                        دیدگاه‌ها
                                                        بر اساس:</span>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="Usefulfaqs-tab" data-toggle="tab"
                                                        href="#Usefulfaqs" role="tab" aria-controls="Usefulfaqs"
                                                        aria-selected="true">مفیدترین پرسش</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="Newsfaqs-tab" data-toggle="tab"
                                                        href="#Newsfaqs" role="tab" aria-controls="Newsfaqs"
                                                        aria-selected="true">جدیدترین پرسش</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="product-questions-list">
                                        <div class="tab-content" id="myTabfaqContent">
                                            <div class="tab-pane fade show active" id="Usefulfaqs" role="tabpanel"
                                                aria-labelledby="Usefulfaqs-tab">
                                                <ul class="faq-list">
                                                    <li class="is-question">
                                                        <div class="section">
                                                            <div class="faq-header-question">
                                                                <span class="fa fa-question-circle-o"></span>
                                                                <p>پرسش
                                                                    <span>حمید متقی پیشه</span>
                                                                </p>
                                                            </div>
                                                            <p>اين دستگاه قابليت استفاده از شارژر هاي بلوتوثي رو هم
                                                                داره؟<br>
                                                                مطابق با سيستم Qr هست؟</p>
                                                            <div class="footer">
                                                                <em>۶ آذر ۱۳۹۸</em>
                                                                <a href="#" class="link-border js-add-answer-btn">به
                                                                    این
                                                                    پرسش پاسخ
                                                                    دهید </a>
                                                            </div>
                                                        </div>
                                                        <div class="section">
                                                            <div class="faq-header-question">
                                                                <span class="fa fa-question-circle-o"></span>
                                                                <p>پرسش
                                                                    <span>حمید متقی پیشه</span>
                                                                </p>
                                                            </div>
                                                            <p>اين دستگاه قابليت استفاده از شارژر هاي بلوتوثي رو هم
                                                                داره؟<br>
                                                                مطابق با سيستم Qr هست؟</p>
                                                            <div class="footer">
                                                                <em>۶ آذر ۱۳۹۸</em>
                                                                <a href="#" class="link-border js-add-answer-btn">به
                                                                    این
                                                                    پرسش پاسخ
                                                                    دهید </a>
                                                            </div>
                                                        </div>
                                                        <div class="section">
                                                            <div class="faq-header-question">
                                                                <span class="fa fa-question-circle-o"></span>
                                                                <p>پرسش
                                                                    <span>حمید متقی پیشه</span>
                                                                </p>
                                                            </div>
                                                            <p>اين دستگاه قابليت استفاده از شارژر هاي بلوتوثي رو هم
                                                                داره؟<br>
                                                                مطابق با سيستم Qr هست؟</p>
                                                            <div class="footer">
                                                                <em>۶ آذر ۱۳۹۸</em>
                                                                <a href="#" class="link-border js-add-answer-btn">به
                                                                    این
                                                                    پرسش پاسخ
                                                                    دهید </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="Newsfaqs" role="tabpanel"
                                                aria-labelledby="Newsfaqs-tab">
                                                <ul class="faq-list">
                                                    <li class="is-question">
                                                        <div class="section">
                                                            <div class="faq-header-question">
                                                                <span class="fa fa-question-circle-o"></span>
                                                                <p>پرسش
                                                                    <span>علی</span>
                                                                </p>
                                                            </div>
                                                            <p>اين دستگاه قابليت استفاده از شارژر هاي بلوتوثي رو هم
                                                                داره؟<br>
                                                                مطابق با سيستم Qr هست؟</p>
                                                            <div class="footer">
                                                                <em>۶ آذر ۱۳۹۸</em>
                                                                <a href="#" class="link-border js-add-answer-btn">به
                                                                    این
                                                                    پرسش پاسخ
                                                                    دهید </a>
                                                            </div>
                                                        </div>
                                                        <div class="section">
                                                            <div class="faq-header-question">
                                                                <span class="fa fa-question-circle-o"></span>
                                                                <p>پرسش
                                                                    <span>علی</span>
                                                                </p>
                                                            </div>
                                                            <p>اين دستگاه قابليت استفاده از شارژر هاي بلوتوثي رو هم
                                                                داره؟<br>
                                                                مطابق با سيستم Qr هست؟</p>
                                                            <div class="footer">
                                                                <em>۶ آذر ۱۳۹۸</em>
                                                                <a href="#" class="link-border js-add-answer-btn">به
                                                                    این
                                                                    پرسش پاسخ
                                                                    دهید </a>
                                                            </div>
                                                        </div>
                                                        <div class="section">
                                                            <div class="faq-header-question">
                                                                <span class="fa fa-question-circle-o"></span>
                                                                <p>پرسش
                                                                    <span>علی</span>
                                                                </p>
                                                            </div>
                                                            <p>اين دستگاه قابليت استفاده از شارژر هاي بلوتوثي رو هم
                                                                داره؟<br>
                                                                مطابق با سيستم Qr هست؟</p>
                                                            <div class="footer">
                                                                <em>۶ آذر ۱۳۹۸</em>
                                                                <a href="#" class="link-border js-add-answer-btn">به
                                                                    این
                                                                    پرسش پاسخ
                                                                    دهید </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3 col-xs-12 pull-left sticky-sidebar">
                                    <div class="question-side-bar">
                                        <div class="question-filter">
                                            <div class="form-auth-row d-inline-block mb-0">
                                                <label class="ui-checkbox">
                                                    <input type="checkbox" value="1" name="login"
                                                        id="remember1">
                                                    <span class="ui-checkbox-check"></span>
                                                </label>
                                                <label for="remember1" class="remember-me">پرسش‌های پاسخ داده شده
                                                </label>
                                            </div>
                                            <div class="form-auth-row d-inline-block mt-0 mb-0">
                                                <label class="ui-checkbox">
                                                    <input type="checkbox" value="1" name="login"
                                                        id="remember2">
                                                    <span class="ui-checkbox-check"></span>
                                                </label>
                                                <label for="remember2" class="remember-me">پرسش‌های بی‌پاسخ
                                                </label>
                                            </div>
                                            <div class="question-filter-bottom">
                                                <div class="form-auth-row d-inline-block mt-0 mb-0">
                                                    <label class="ui-checkbox">
                                                        <input type="checkbox" value="1" name="login"
                                                            id="remember3">
                                                        <span class="ui-checkbox-check"></span>
                                                    </label>
                                                    <label for="remember3" class="remember-me">پرسش‌های من
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-product-id">
                            <span>شناسه کالا :</span>
                            <span>DKP - ۱۶۷۲۴۷۸</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 pull-left sticky-sidebar">
                    <div class="mini-buy-box-fixed">
                        <div class="mini-buy-box js-mini-buy-box">
                            <div class="mini-buy-box-product-info">
                                <img src="{{ $product->image }}" class="mini-buy-box-product-info-img"
                                    alt="img-slider">
                                <div class="mini-buy-box-product-info-info">
                                    <div class="title">{{ $product->title }}</div>
                                    <div class="colors ">
                                        <label data-color-code="#FFFFFF" class="js-variant-color"
                                            style="background-color: rgb(255, 255, 255);"></label>
                                        <span class="js-color-title">سفید</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mini-buy-box-row mini-buy-box-seller js-mini-not-digikala-seller">
                                <i class="mdi mdi-storefront"></i>
                                <label class="js-mini-seller-name">مارکت موبایل پایتخت</label>
                            </div>
                            <div class="mini-buy-box-row mini-buy-box-warranty">
                                <i class="mdi mdi-check"></i>
                                گارانتی ۱۸ ماهه تجارت ژاو
                            </div>
                            <div class="mini-buy-box-row mini-buy-box-stock">
                                <i class="mdi mdi-content-save-outline"></i>
                                موجود در انبار دیجی‌کالا
                            </div>
                            <div class="mini-buy-box-row mini-buy-box-best-price js-data-best-price text-success">
                                <i class="mdi mdi-information-outline"></i>
                                بهترین قیمت ۳۰ روز گذشته
                            </div>
                            <div class="product-seller-row product-seller-row-price mini-buy-box-price-row">
                                <div class="product-mini-seller-price-real">
                                    <div class="product-mini-seller-price-pure js-price-value d-inline-block">
                                        {{ number_format($product->price) }}
                                    </div>
                                    <span class="mini-buy-box-toman">تومان</span>
                                </div>
                            </div>
                            <div class="mini-buy-box-btn-row">
                                <a href="#" class="btn btn-danger product-add-to-cart-btn">
                                    افزودن به سبد خرید
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
