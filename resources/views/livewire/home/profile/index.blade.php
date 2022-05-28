@section('title','پروفایل کاربری')
<div>
    <!--search-category------------------------->
    <div class="col-lg-3 col-md-4 col-xs-12">
        <div class="sidebar-wrapper">
            <div class="box-sidebar">
                <div class="profile-box" style="border: none;">
                    <img src="{{ asset('home/images/profile/1.jpg') }}" class="profile-box-img-banner" alt="profile">
                </div>
            </div>

            <div class="box-sidebar">
                <div class="profile-box">
                    <div class="profile-box-avator">
                        <img src="{{ $user->profilePhoto }}" alt="profile">
                    </div>

                    <div class="profile-box-content">
                        <span class="profile-box-nameuser">{{ $user->name }}</span>
                        <span class="profile-box-phone">{{ $user->mobile }}</span>
                    </div>

                    <a href="#" class="profile-box-row-arrow">
                        <div class="profile-box-title">کیف پول</div>
                        <div class="profile-box-price">
                            <div class="wallet-amount">0</div>
                            <div class="profile-box-currency">تومان</div>
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <p class="profile-box-wallet-link">افزایش موجودی</p>
                    </a>

                    <a href="#" class="profile-box-row-arrow">
                        <div class="profile-box-title">دیجی کلاب</div>
                        <div class="profile-box-price">
                            <div class="wallet-amount">0</div>
                            <div class="profile-box-currency">امتیاز</div>
                            <i class="fa fa-angle-left"></i>
                        </div>
                    </a>
                </div>
                <ul class="profile-menu-items">
                    <li><a href="profile.html" class="profile-menu-url active-profile"><span
                                class="mdi mdi-account-outline"></span>پروفایل</a></li>
                    <li><a href="profile-order.html" class="profile-menu-url"><span class="mdi mdi-basket"></span>همه
                            سفارش ها</a></li>
                    <li><a href="profile-order-return.html" class="profile-menu-url"><span
                                class="mdi mdi-autorenew"></span>در خواست مرجوعی</a></li>
                    <li><a href="profile-favorites.html" class="profile-menu-url"><span
                                class="mdi mdi-heart-outline"></span>لیست
                            علاقه مندی ها</a></li>
                    <li><a href="profile-comments.html" class="profile-menu-url"><span
                                class="mdi mdi-comment-multiple-outline"></span>نقد و نظرات</a></li>
                    <li><a href="profile-addresses.html" class="profile-menu-url"><span
                                class="mdi mdi-map-marker-outline"></span>آدرس
                            ها</a></li>
                    <li><a href="#" class="profile-menu-url"><span class="mdi mdi-history"></span>بازدید های اخیر</a>
                    </li>
                    <li><a href="profile-personal-info.html" class="profile-menu-url"><span
                                class="mdi mdi-account-circle"></span>اطلاعات شخصی</a></li>
                    <li>
                        <a  wire:click="logout({{ $user->id }})" style="cursor: pointer;" class="profile-menu-url">
                            <span class="mdi mdi-power"></span>خروج
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <div class="col-lg-9 col-md-8 col-xs-12 pull-right">
        <div class="col-lg-6 col-xs-12 pull-right">
            <div class="headline-profile">
                <span>اطلاعات شخصی</span>
            </div>
            <div class="profile-stats mt-3">
                <div class="profile-stats-row">
                    <div class="col-lg-6 col-md-6 col-xs-12 pull-right" style="padding:0;">
                        <div class="profile-stats-col">
                            <p><span> نام و نام خانوادگی :</span>{{ $user->name }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 pull-right" style="padding:0;">
                        <div class="profile-stats-col">
                            <p><span>پست الکترونیک :</span>{{ $user->email }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 pull-right" style="padding:0;">
                        <div class="profile-stats-col">
                            <p><span>شماره تلفن همراه :</span>{{ $user->mobile }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 pull-right" style="padding:0;">
                        <div class="profile-stats-col">
                            <p><span>کد ملی :</span>-</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 pull-right" style="padding:0;">
                        <div class="profile-stats-col">
                            <p><span>دریافت خبرنامه :</span>بله</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 pull-right" style="padding:0;">
                        <div class="profile-stats-col">
                            <p><span>شماره کارت :</span>-</p>
                        </div>
                    </div>
                    <div class="profile-stats-action">
                        <a href="profile-additional-info.html" class="link-spoiler-edit"><i
                                class="fa fa-pencil"></i>ویرایش اطلاعات شخصی</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-xs-12 pull-right">
            <div class="headline-profile headline-profile-favorites">
                <span>لیست علاقه مندی</span>
            </div>
            <div class="profile-stats mt-3">
                <div class="profile-recent-fav">
                    <a href="#"><img src="{{ asset('home/images/product-slider-2/111472656.jpg') }}" alt="profile"></a>
                    <div class="profile-recent-fav-col">
                        <a href="#">گوشی موبایل سامسونگ مدل Samsung Galaxy S10 Plus SM...</a>
                        <div class="profile-recent-fav-price">۱,۷۴۶,۰۰۰تومان</div>
                        <div class="profile-recent-fav-remove">
                            <a href="#">
                                <i class="fa fa-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="profile-recent-fav">
                    <a href="#"><img src="{{ asset('home/images/product-slider-2/111472656.jpg') }}" alt="profile"></a>
                    <div class="profile-recent-fav-col">
                        <a href="#">گوشی موبایل سامسونگ مدل Samsung Galaxy S10 Plus SM...</a>
                        <div class="profile-recent-fav-price">۱,۷۴۶,۰۰۰تومان</div>
                        <div class="profile-recent-fav-remove">
                            <a href="#">
                                <i class="fa fa-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="profile-stats-action">
                    <a href="#" class="link-spoiler-edit"><i class="fa fa-pencil"></i>مشاهده و ویرایش لیست علاقه
                        مندی</a>
                </div>
            </div>
        </div>

        <div class="headline-profile order-end" style="margin-top:0;">
            <span>آخرین سفارش ها</span>
        </div>
        <div class="profile-stats profile-table">
            <div class="table-orders">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">شماره سفارش</th>
                            <th scope="col">تاریخ ثبت سفارش</th>
                            <th scope="col">مبلغ قابل پرداخت</th>
                            <th scope="col">مبلغ کل</th>
                            <th scope="col">عملیات پرداخت</th>
                            <th scope="col">جزئیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td class="order-code">DKC-57262900</td>
                            <td>1 آذر 1398</td>
                            <td>0</td>
                            <td>43,000 تومان</td>
                            <td class="text-success">پرداخت موفق</td>
                            <td><i class="fa fa-angle-left"></i></td>
                        </tr>
                    </tbody>
                </table>

                <a href="#" class="table-orders-show-more">مشاهده لیست سفارش‌ها</a>
            </div>
        </div>
        <div class="page-profile headline-profile-favorites">
            <div class="page-navigation">
                <div class="page-navigation-title">سفارش‌های من</div>
                <a href="#" class="page-navigation-btn-back">بازگشت <i class="fa fa-angle-left"></i></a>
            </div>
            <div class="profile-orders">
                <div class="collapse">
                    <div class="profile-orders-item">
                        <div class="profile-orders-header">
                            <a href="profile-order-2.html" class="profile-orders-header-details">
                                <div class="profile-orders-header-summary">
                                    <div class="profile-orders-header-row">
                                        <span class="profile-orders-header-id">DKC-79356178</span>
                                        <span class="profile-orders-header-state">پرداخت شده</span>
                                    </div>
                                </div>
                            </a>
                            <hr class="ui-separator">
                            <div class="profile-orders-header-data">
                                <div class="profile-info-row">
                                    <div class="profile-info-label">تاریخ ثبت سفارش</div>
                                    <div class="profile-info-value">۷ آذر ۱۳۹۸</div>
                                </div>
                                <div class="profile-info-row">
                                    <div class="profile-info-label">مبلغ قابل پرداخت</div>
                                    <div class="profile-info-value">0</div>
                                </div>
                                <div class="profile-info-row">
                                    <div class="profile-info-label">مبلغ کل</div>
                                    <div class="profile-info-value">430,000,0</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    adplacement--------------------------->

    <div class="adplacement pull-right">
        <div class="col-6 col-lg-3 pull-right" style="padding-left:0;">
            <a href="#" class="item-adplacement">
                <img src="{{ asset('home/images/post-adplacement/1000012860.jpg') }}" title="صوتی و تصویری" alt="adplacement">
            </a>
        </div>

        <div class="col-6 col-lg-3 pull-right">
            <a href="#" class="item-adplacement">
                <img src="{{ asset('home/images/post-adplacement/1000012872.jpg') }}" title="شوینده ظروف" alt="adplacement">
            </a>
        </div>

        <div class="col-6 col-lg-3 pull-right" style="padding-left:0;">
            <a href="#" class="item-adplacement">
                <img src="{{ asset('home/images/post-adplacement/1000013192.jpg') }}" title="افس" alt="adplacement">
            </a>
        </div>

        <div class="col-6 col-lg-3 pull-right">
            <a href="#" class="item-adplacement">
                <img src="{{ asset('home/images/post-adplacement/1000012909.jpg') }}" title="مراقبت پوست و مو" alt="adplacement">
            </a>
        </div>
    </div>
    <!--    adplacement--------------------------->
    <div class="col-lg-12 col-md-12 col-xs-12 pull-right">
        <div class="row">
            <div class="col-12">
                <div class="widget widget-product card">
                    <header class="card-header">
                        <span class="title-one">گوشی موبایل</span>
                    </header>
                    <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2281px;">
                                <div class="owl-item active" style="width: 315.75px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/111460776.jpg') }}" class="img-fluid"
                                                alt="img-slider">
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
                                            <img src="{{ asset('home/images/product-slider-2/111474228.jpg') }}" class="img-fluid"
                                                alt="img-slider">
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
                                            <img src="{{ asset('home/images/product-slider-2/112145268.jpg') }}" class="img-fluid"
                                                alt="img-slider">
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
                                            <img src="{{ asset('home/images/product-slider-2/111475300.jpg') }}" class="img-fluid"
                                                alt="img-slider">
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
                                            <img src="{{ asset('home/images/product-slider-2/113542184.jpg') }}" class="img-fluid"
                                                alt="img-slider">
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
                                            <img src="{{ asset('home/images/product-slider-2/111469793.jpg') }}" class="img-fluid"
                                                alt="img-slider">
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
                                            <img src="{{ asset('home/images/product-slider-2/111472656.jpg') }}" class="img-fluid"
                                                alt="img-slider">
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
    <!--search-category------------------------->

</div>
