@extends('livewire.home.layouts.product')
@section('title', 'فروشگاه')
@section('content')
    <!--    Start Main Slider -------------------->
    <div class="col-12">
        <aside class="adplacement-header">
            <a href="{{ $bannerTop->link }}"><img style="width:100%" src="{{ $bannerTop->image }}"
                    alt="{{ $bannerTop->alt }}"></a>
        </aside>
    </div>
    <div class="d-block">
        <div class="col-lg-8 col-md-8 col-xs-12 pull-right">
            <div class="main-slider">
                <div class="main-slider-container">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @php
                                $active1 = 0;
                            @endphp
                            @foreach ($sliderMain as $slideMain)
                                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $slideMain->id }}"
                                    class="@if ($active1 == 0) active @endif"></li>
                                @php
                                    $active1 = $active1 + 1;
                                @endphp
                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            @php
                                $active2 = 0;
                            @endphp
                            @foreach ($sliderMain as $slideMain)
                                <div class="carousel-item @if ($active2 == 0) active @endif">
                                    <a href="{{ $slideMain->link }}">
                                        <img class="d-block w-100" src="{{ $slideMain->image }}" alt="{{ $slideMain->alt }}"
                                            alt="Second slide">
                                    </a>
                                </div>
                                @php
                                    $active2 = $active2 + 1;
                                @endphp
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="fa fa-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="fa fa-angle-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--    End Main Slider ---------------------->

    <!--adplacement-------------------------------->
    <div class="col-lg-4 col-md-4 col-xs-12 pull-left">
        <aside class="adplacement-container-column">
            @foreach ($bannerLeftTop as $bannerLeft)
                <a href="{{ $bannerLeft->link }}" class="adplacement-item adplacement-item-column">
                    <div class="adplacement-sponsored-box">
                        <img src="{{ $bannerLeft->image }}" alt="{{ $bannerLeft->alt }}">
                    </div>
                </a>
            @endforeach
        </aside>
    </div>
    <!--adplacement-------------------------------->

    <!--  product-slider-------------------->
    <div class="col-lg-12 col-md-12 col-xs-12 pull-right">
        <div class="row">
            <div class="col-12">
                <div class="amazing">
                    <div class="widget widget-product card">
                        <span class="amazing-title"><img src="{{ asset('home/images/product-slider-2/amazing.png') }}"
                                alt="amazing"></span>
                        <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                                    <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                        <div class="item">
                                            <a href="#">
                                                <img src="{{ asset('home/images/product-slider-2/111460776.jpg') }}"
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
                                    <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                        <div class="item">
                                            <a href="#">
                                                <img src="{{ asset('home/images/product-slider-2/111474228.jpg') }}"
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
                                    <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                        <div class="item">
                                            <a href="#">
                                                <img src="{{ asset('home/images/product-slider-2/112145268.jpg') }}"
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
                                    <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                        <div class="item">
                                            <a href="#">
                                                <img src="{{ asset('home/images/product-slider-2/111475300.jpg') }}"
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
                                    <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                        <div class="item">
                                            <a href="#">
                                                <img src="{{ asset('home/images/product-slider-2/113542184.jpg') }}"
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
                                    <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                        <div class="item">
                                            <a href="#">
                                                <img src="{{ asset('home/images/product-slider-2/111469793.jpg') }}"
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
                                    <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                        <div class="item">
                                            <a href="#">
                                                <img src="{{ asset('home/images/product-slider-2/111472656.jpg') }}"
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
    </div>
    <!--  product-slider-------------------->

    <!--slider-amazing----------------------------->
    <section class="section-slider amazing-section mb-3 mt-4" style="background: rgb(239, 57, 78);">
        <div class="container-amazing">
            <div class="container-main">
                <div>
                    <div class="col-lg-3 display-md-none pull-right">
                        <div class="amazing-product text-center mt-5">
                            <a href="#">
                                <img src="{{ asset('home/images/amazing/amazing.png') }}" alt="amazing">
                            </a>
                            <a href="#" class="view-all-amazing-btn">
                                مشاهده همه
                                <i class="uil uil-angle-left"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 pull-left">
                        <div class="section-slider-content">
                            <div class="section-slider-product slider-amazing mt-3">
                                <div class="widget widget-product card" style="margin:0;">
                                    <header class="card-header card-header-amazing">
                                        <span class="title-one">پیشنهاد شگفت انگیز</span>
                                        <a class="card-title">مشاهده همه</a>
                                    </header>
                                    <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                                        <div class="owl-stage-outer">
                                            <div class="owl-stage"
                                                style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                                                @foreach ($offProducts as $off)
                                                    @php
                                                        $discount = (($off->price - $off->discountPrice) / abs($off->discountPrice)) * 100;
                                                    @endphp
                                                    @if ($discount >= 20)
                                                        <div class="owl-item active"
                                                            style="width: 309.083px; margin-left: 10px;">
                                                            <div class="item">
                                                                <a href="/product/{{ $off->slug }}">
                                                                    <img src="{{ $off->image }}" class="img-fluid"
                                                                        alt="{{ $off->title }}">
                                                                </a>
                                                                <h2 class="post-title">
                                                                    <a
                                                                        href="/product/{{ $off->slug }}">{{ $off->title }}</a>
                                                                </h2>
                                                                <div class="price">
                                                                    <div class="discount-item">
                                                                        <span>{{ $discount }}٪</span>
                                                                    </div>
                                                                    <del><span>{{ number_format($off->price) }}
                                                                            <span>تومان</span></span></del>
                                                                    <ins><span>{{ number_format($off->discountPrice) }}
                                                                            <span>تومان</span></span></ins>
                                                                </div>
                                                                {{-- <div class="product-box-timer">
                                                                <span class="fa fa-clock-o"></span>
                                                                <div class="countdown countdown-style-3 h4"
                                                                    data-date-time="10/10/2025 24:00"
                                                                    data-labels='{"label-second": "", "label-minute": "", "label-hour": ""}'>
                                                                </div>
                                                            </div> --}}
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
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
    </section>
    <!--slider-amazing----------------------------->

    <!--   adplacement -------------------->
    <div class="adplacement">
        @foreach ($banner4 as $baner4)
            <div class="col-6 col-lg-3 pull-right" style="padding-left:0;">
                <a href="{{ $baner4->link }}" class="item-adplacement">
                    <img src="{{ $baner4->image }}" title="" alt="{{ $baner4->alt }}">
                </a>
            </div>
        @endforeach
    </div>
    <!--   adplacement -------------------->

    <!--slider-amazing----------------------------->
    <section class="section-slider amazing-section mb-3 mt-4" style="background: #6bb927;">
        <div class="container-amazing">
            <div class="container-main">
                <div>
                    <div class="col-lg-3 display-md-none pull-right">
                        <div class="amazing-product text-center mt-5">
                            <a href="#">
                                <img src="{{ asset('home/images/amazing/amazing-supermarket.png') }}" alt="amazing">
                            </a>
                            <a href="#" class="view-all-amazing-btn">
                                مشاهده همه
                                <i class="uil uil-angle-left"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 pull-left">
                        <div class="section-slider-content">
                            <div class="section-slider-product slider-amazing amazing-supermarket mt-3">
                                <div class="widget widget-product card" style="margin:0;">
                                    <header class="card-header card-header-amazing">
                                        <span class="title-one">شگفت انگیز سوپر مارکتی</span>
                                        <a class="card-title">مشاهده همه</a>
                                    </header>
                                    <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                                        <div class="owl-stage-outer">
                                            <div class="owl-stage"
                                                style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                                    <div class="item">
                                                        <a href="#">
                                                            <img src="{{ asset('home/images/product-slider-2/Whitex.jpg') }}"
                                                                class="img-fluid" alt="img-slider">
                                                        </a>
                                                        <h2 class="post-title">
                                                            <a href="#">
                                                                تلویزیون ال ای دی هوشمند سامسونگ مدل 82NU8900 سایز 82
                                                                اینچ
                                                            </a>
                                                        </h2>
                                                        <div class="price">
                                                            <div class="discount-item">
                                                                <span>۳۲٪</span>
                                                            </div>
                                                            <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                                        </div>
                                                        <div class="product-box-timer">
                                                            <span class="fa fa-clock-o"></span>
                                                            <div class="countdown countdown-style-3 h4"
                                                                data-date-time="10/10/2025 24:00"
                                                                data-labels='{"label-second": "", "label-minute": "", "label-hour": ""}'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                                    <div class="item">
                                                        <a href="#">
                                                            <img src="{{ asset('home/images/product-slider-2/Napkin.jpg') }}"
                                                                class="img-fluid" alt="img-slider">
                                                        </a>
                                                        <h2 class="post-title">
                                                            <a href="#">
                                                                تلویزیون ال ای دی هوشمند ایکس ویژن مدل 55XT515 سایز 55
                                                                اینچ
                                                            </a>
                                                        </h2>
                                                        <div class="price">
                                                            <div class="discount-item">
                                                                <span>۳۲٪</span>
                                                            </div>
                                                            <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                                        </div>
                                                        <div class="product-box-timer">
                                                            <span class="fa fa-clock-o"></span>
                                                            <div class="countdown countdown-style-3 h4"
                                                                data-date-time="10/10/2025 24:00"
                                                                data-labels='{"label-second": "", "label-minute": "", "label-hour": ""}'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                                    <div class="item">
                                                        <a href="#">
                                                            <img src="{{ asset('home/images/product-slider-2/Barberry.jpg') }}"
                                                                class="img-fluid" alt="img-slider">
                                                        </a>
                                                        <h2 class="post-title">
                                                            <a href="#">
                                                                تلویزیون ال ای دی هوشمند مجیک تی وی مدل MT65D2400 سایز
                                                                65 اینچ
                                                            </a>
                                                        </h2>
                                                        <div class="price">
                                                            <div class="discount-item">
                                                                <span>۳۲٪</span>
                                                            </div>
                                                            <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                                        </div>
                                                        <div class="product-box-timer">
                                                            <span class="fa fa-clock-o"></span>
                                                            <div class="countdown countdown-style-3 h4"
                                                                data-date-time="10/10/2025 24:00"
                                                                data-labels='{"label-second": "", "label-minute": "", "label-hour": ""}'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                                    <div class="item">
                                                        <a href="#">
                                                            <img src="{{ asset('home/images/product-slider-2/Tablecloth.jpg') }}"
                                                                class="img-fluid" alt="img-slider">
                                                        </a>
                                                        <h2 class="post-title">
                                                            <a href="#">
                                                                تلویزیون ال ای دی هوشمند ایکس ویژن مدل 49XTU725 سایز 49
                                                                اینچ
                                                            </a>
                                                        </h2>
                                                        <div class="price">
                                                            <div class="discount-item">
                                                                <span>۳۲٪</span>
                                                            </div>
                                                            <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                                        </div>
                                                        <div class="product-box-timer">
                                                            <span class="fa fa-clock-o"></span>
                                                            <div class="countdown countdown-style-3 h4"
                                                                data-date-time="10/10/2025 24:00"
                                                                data-labels='{"label-second": "", "label-minute": "", "label-hour": ""}'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                                    <div class="item">
                                                        <a href="#">
                                                            <img src="{{ asset('home/images/product-slider-2/Pizza.jpg') }}"
                                                                class="img-fluid" alt="img-slider">
                                                        </a>
                                                        <h2 class="post-title">
                                                            <a href="#">
                                                                تلویزیون ال ای دی هوشمند ایکس ویژن مدل 49XTU725 سایز 49
                                                                اینچ
                                                            </a>
                                                        </h2>
                                                        <div class="price">
                                                            <div class="discount-item">
                                                                <span>۳۲٪</span>
                                                            </div>
                                                            <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                                        </div>
                                                        <div class="product-box-timer">
                                                            <span class="fa fa-clock-o"></span>
                                                            <div class="countdown countdown-style-3 h4"
                                                                data-date-time="10/10/2025 24:00"
                                                                data-labels='{"label-second": "", "label-minute": "", "label-hour": ""}'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                                    <div class="item">
                                                        <a href="#">
                                                            <img src="{{ asset('home/images/product-slider-2/Tea.jpg') }}"
                                                                class="img-fluid" alt="img-slider">
                                                        </a>
                                                        <h2 class="post-title">
                                                            <a href="#">
                                                                تلویزیون ال ای دی هوشمند ایکس ویژن مدل 43XT725 سایز 43
                                                                اینچ
                                                            </a>
                                                        </h2>
                                                        <div class="price">
                                                            <div class="discount-item">
                                                                <span>۳۲٪</span>
                                                            </div>
                                                            <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                                        </div>
                                                        <div class="product-box-timer">
                                                            <span class="fa fa-clock-o"></span>
                                                            <div class="countdown countdown-style-3 h4"
                                                                data-date-time="10/10/2025 24:00"
                                                                data-labels='{"label-second": "", "label-minute": "", "label-hour": ""}'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                                    <div class="item">
                                                        <a href="#">
                                                            <img src="{{ asset('home/images/product-slider-2/Sugar.jpg') }}"
                                                                class="img-fluid" alt="img-slider">
                                                        </a>
                                                        <h2 class="post-title">
                                                            <a href="#">
                                                                تلویزیون ال ای دی هوشمند ایکس ویژن مدل 55XTU725 سایز 55
                                                                اینچ
                                                            </a>
                                                        </h2>
                                                        <div class="price">
                                                            <div class="discount-item">
                                                                <span>۳۲٪</span>
                                                            </div>
                                                            <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                                        </div>
                                                        <div class="product-box-timer">
                                                            <span class="fa fa-clock-o"></span>
                                                            <div class="countdown countdown-style-3 h4"
                                                                data-date-time="10/10/2025 24:00"
                                                                data-labels='{"label-second": "", "label-minute": "", "label-hour": ""}'>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--slider-amazing----------------------------->

    <!--    Slider-sidebar------------------->
    <div class="col-lg-2 col-md-12 col-xs-12 pull-left">
        <div class="slider-sidebar">
            <div class="widget-suggestion widget card">
                <header class="card-header promo-single-headline">
                    <h3 class="card-title">پیشنهادهای لحظه‌ای</h3>
                </header>
                <div id="progressBar">
                    <div class="slide-progress" style="width: 100%; transition: width 5000ms ease 0s;"></div>
                </div>
                <div id="suggestion-slider" class="owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(1369px, 0px, 0px); transition: all 0.25s ease 0s; width: 2190px;">
                            <div class="owl-item cloned" style="width: 273.75px;">
                                <div class="item">
                                    <a href="#">
                                        <img src="{{ asset('home/images/slider-sidebar/slider-sidebar-1.jpg') }}"
                                            class="w-100" alt="img-slider">
                                    </a>
                                    <h3 class="product-title">
                                        <a href="#"> لپ تاپ 15 اینچی ایسوس مدل VivoBook X543MA - A</a>
                                    </h3>
                                    <div class="price">
                                        <del><span class="amount">۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                        <span class="amount">۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 273.75px;">
                                <div class="item">
                                    <a href="#">
                                        <img src="{{ asset('home/images/slider-sidebar/slider-sidebar-2.jpg') }}"
                                            class="w-100" alt="img-slider">
                                    </a>
                                    <h3 class="product-title">
                                        <a href="#"> لپ تاپ 15 اینچی دل مدل XPS 7590-A </a>
                                    </h3>
                                    <div class="price">
                                        <del><span class="amount">۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                        <span class="amount">۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 273.75px;">
                                <div class="item">
                                    <a href="#">
                                        <img src="{{ asset('home/images/slider-sidebar/slider-sidebar-3.jpg') }}"
                                            class="w-100" alt="img-slider">
                                    </a>
                                    <h3 class="product-title">
                                        <a href="#"> لپ تاپ 15 اینچی مایکروسافت مدل Surface Book 2- C </a>
                                    </h3>
                                    <div class="price">
                                        <span class="amount">۴,۵۳۰,۰۰۰<span>تومان</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 273.75px;">
                                <div class="item">
                                    <a href="#">
                                        <img src="{{ asset('home/images/slider-sidebar/slider-sidebar-4.jpg') }}"
                                            class="w-100" alt="img-slider">
                                    </a>
                                    <h3 class="product-title">
                                        <a href="#"> لپ تاپ ۱۵ اینچی ایسوس مدل FX503VD - A
                                        </a>
                                    </h3>
                                    <div class="price">
                                        <del><span class="amount">۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                        <span class="amount">۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    Slider-sidebar------------------->

    <!--   slider-product-------------------->
    <div class="col-lg-10 col-md-12 col-xs-12 pull-right mt-2">
        <div class="row">
            <div class="col-12">
                <div class="widget widget-product card">
                    <header class="card-header">
                        <span class="title-one">صندلی اداری</span>
                    </header>
                    <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/chair1.jpg') }}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                صندلی اداری رونیکا مدل گلرخ
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/chair2.jpg') }}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                صندلی اداری رونیکا مدل گلرخ
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/chair3.jpg') }}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                صندلی اداری رونیکا مدل گلرخ
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/chair4.jpg') }}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                صندلی اداری رونیکا مدل گلرخ
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/chair5.jpg') }}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                صندلی اداری رونیکا مدل گلرخ
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/chair6.jpg') }}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                صندلی اداری رونیکا مدل گلرخ
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/chair7.jpg') }}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                صندلی اداری رونیکا مدل گلرخ
                                            </a>
                                        </h2>
                                        <div class="price">
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

    <!--        category--------------------------->
    <div class="col-12">
        <div class="promotion-categories-container mt-4 mb-4">
            <span class="promotion-categories-title">بیش از ۲،۰۰۰،۰۰۰ کالا در دسته‌بندی‌های مختلف</span>
            <div class="category-container">
                <div class="promotion-categories">
                    <a href="#" class="promotion-category">
                        <img src="{{ asset('home/images/category/computer.png') }}" alt="promotion-categories">
                        <div class="promotion-category-name">کالای دیجیتال</div>
                        <div class="promotion-category-quantity">۲۰۳۰۰۰ کالا</div>
                    </a>
                    <a href="#" class="promotion-category">
                        <img src="{{ asset('home/images/category/medication.png') }}" alt="promotion-categories">
                        <div class="promotion-category-name">لوازم آرایشی</div>
                        <div class="promotion-category-quantity">۶۰۰۰۰ کالا</div>
                    </a>
                    <a href="#" class="promotion-category">
                        <img src="{{ asset('home/images/category/web.png') }}" alt="promotion-categories">
                        <div class="promotion-category-name">خودرو، ابزار و اداری</div>
                        <div class="promotion-category-quantity">۷۲۰۰۰ کالا</div>
                    </a>
                    <a href="#" class="promotion-category">
                        <img src="{{ asset('home/images/category/dress.png') }}" alt="promotion-categories">
                        <div class="promotion-category-name">مد و پوشاک</div>
                        <div class="promotion-category-quantity">۲۶۱۰۰۰ کالا</div>
                    </a>
                    <a href="#" class="promotion-category">
                        <img src="{{ asset('home/images/category/furniture-and-household.png') }}"
                            alt="promotion-categories">
                        <div class="promotion-category-name">خانه و آشپزخانه</div>
                        <div class="promotion-category-quantity">۲۷۷۰۰۰ کالا</div>
                    </a>
                    <a href="#" class="promotion-category">
                        <img src="{{ asset('home/images/category/pen.png') }}" alt="promotion-categories">
                        <div class="promotion-category-name">کتاب، لوازم تحریر و هنر</div>
                        <div class="promotion-category-quantity">۱۰۴۰۰۰ کالا</div>
                    </a>
                    <a href="#" class="promotion-category">
                        <img src="{{ asset('home/images/category/motherhood.png') }}" alt="promotion-categories">
                        <div class="promotion-category-name">اسباب بازی، کودک و نوزاد</div>
                        <div class="promotion-category-quantity">۳۷۰۰۰ کالا</div>
                    </a>
                    <a href="#" class="promotion-category">
                        <img src="{{ asset('home/images/category/sports-and-competition.png') }}"
                            alt="promotion-categories">
                        <div class="promotion-category-name">ورزش و سفر</div>
                        <div class="promotion-category-quantity">۱۹۰۰۰ کالا</div>
                    </a>
                    <a href="#" class="promotion-category">
                        <img src="{{ asset('home/images/category/food-and-restaurant.png') }}"
                            alt="promotion-categories">
                        <div class="promotion-category-name">خوردنی و آشامیدنی</div>
                        <div class="promotion-category-quantity">۲۷۰۰۰ کالا</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--        category--------------------------->

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
                                style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/rzai.jpg') }}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                کفش ورزشی مردانه مدل rzai
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <del>
                                                <span>70,000
                                                    <span>تومان</span>
                                                </span>
                                            </del>
                                            <ins>
                                                <span>65,000
                                                    <span>تومان</span>
                                                </span>
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/d.r.j.e.27.jpg') }}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                کفش مخصوص دویدن مردانه مدل 27ِ.D.r.j.e
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <del>
                                                <span>109,000
                                                    <span>تومان</span>
                                                </span>
                                            </del>
                                            <ins>
                                                <span>89,000
                                                    <span>تومان</span>
                                                </span>
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/adiza001.jpg') }}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                کفش مخصوص پیاده روی مردانه کد adiza001
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <del>
                                                <span>90,000
                                                    <span>تومان</span>
                                                </span>
                                            </del>
                                            <ins>
                                                <span>85,000
                                                    <span>تومان</span>
                                                </span>
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/arshi-ad.jpg') }}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                کفش مخصوص دویدن مردانه مدل arshi-ad
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <del>
                                                <span>140,000
                                                    <span>تومان</span>
                                                </span>
                                            </del>
                                            <ins>
                                                <span>137,000
                                                    <span>تومان</span>
                                                </span>
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/jor-me-se.jpg') }}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                کفش مخصوص پیاده روی مردانه کد jor-me-se 001
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <del>
                                                <span>150,000
                                                    <span>تومان</span>
                                                </span>
                                            </del>
                                            <ins>
                                                <span>89,000
                                                    <span>تومان</span>
                                                </span>
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/270c.jpg') }}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                کفش مخصوص پیاده روی مردانه کد 270C
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <del>
                                                <span>170,000
                                                    <span>تومان</span>
                                                </span>
                                            </del>
                                            <ins>
                                                <span>166,000
                                                    <span>تومان</span>
                                                </span>
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/um.jpg') }}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                کفش مخصوص پیاده روی مردانه کد UM
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <del>4
                                                <span>198,000
                                                    <span>تومان</span>
                                                </span>
                                            </del>
                                            <ins>
                                                <span>138,000
                                                    <span>تومان</span>
                                                </span>
                                            </ins>
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
    <!--   slider-product-------------------->

    <!--   adplacement -------------------->
    <div class="adplacement">
        <div class="col-6 col-lg-3 pull-right" style="padding-left:0;">
            <a href="#" class="item-adplacement">
                <img src="{{ asset('home/images/post-adplacement/1000009159.jpg') }}" title="صوتی و تصویری"
                    alt="adplacement">
            </a>
        </div>

        <div class="col-6 col-lg-3 pull-right">
            <a href="#" class="item-adplacement">
                <img src="{{ asset('home/images/post-adplacement/1000010064.jpg') }}" title="شوینده ظروف"
                    alt="adplacement">
            </a>
        </div>

        <div class="col-6 col-lg-3 pull-right" style="padding-left:0;">
            <a href="#" class="item-adplacement">
                <img src="{{ asset('home/images/post-adplacement/1000005397.jpg') }}" title="افس" alt="adplacement">
            </a>
        </div>

        <div class="col-6 col-lg-3 pull-right">
            <a href="#" class="item-adplacement">
                <img src="{{ asset('home/images/post-adplacement/1000005393.jpg') }}" title="مراقبت پوست و مو"
                    alt="adplacement">
            </a>
        </div>
    </div>
    <!--   adplacement -------------------->

    <!--   slider-product-------------------->
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
                                style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/111460776.jpg') }}"
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
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/111474228.jpg') }}"
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
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/112145268.jpg') }}"
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
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/111475300.jpg') }}"
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
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/113542184.jpg') }}"
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
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/111469793.jpg') }}"
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
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/111472656.jpg') }}"
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
    <!--   slider-product-------------------->

    <!--   adplacement -------------------->
    <div class="adplacement">
        @foreach ($banner2 as $baner2)
            <div class="col-lg-6 col-xs-12 pull-right">
                <a href="{{ $baner2->link }}" class="item-adplacement">
                    <img src="{{ $baner2->image }}" title="صوتی و تصویری" alt="{{ $baner2->alt }}">
                </a>
            </div>
        @endforeach

    </div>
    <!--   adplacement -------------------->


    <!--   slider-product-------------------->
    <div class="col-lg-12 col-md-12 col-xs-12 pull-right">
        <div class="row">
            <div class="col-12">
                <div class="widget widget-product card">
                    <header class="card-header">
                        <span class="title-one">ساعت عقربه ای زنانه</span>
                    </header>
                    <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/clock1.jpg') }}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                ساعت مچی عقربه ای 5موتور فعال ضدآب اسکمی مدل 9127
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/clock2.jpg') }}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                ساعت مچی عقربه ای 5موتور فعال ضدآب اسکمی مدل 9127
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/clock3.jpg') }}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                ساعت مچی عقربه ای 5موتور فعال ضدآب اسکمی مدل 9127
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/clock4.jpg') }}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                ساعت مچی عقربه ای 5موتور فعال ضدآب اسکمی مدل 9127
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/clock5.jpg') }}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                ساعت مچی عقربه ای 5موتور فعال ضدآب اسکمی مدل 9127
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/clock6.jpg') }}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                ساعت مچی عقربه ای 5موتور فعال ضدآب اسکمی مدل 9127
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/clock7.jpg') }}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                ساعت مچی عقربه ای 5موتور فعال ضدآب اسکمی مدل 9127
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

    <div class="col-lg-12 col-md-12 col-xs-12 pull-right">
        <div class="row">
            <div class="col-12">
                <div class="widget widget-product card">
                    <header class="card-header">
                        <span class="title-one">لپ تاپ</span>
                    </header>
                    <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/laptop1.jpg') }}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                لپ تاپ 15 اینچی لنوو مدل Ideapad 3 - A
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/laptop2.jpg') }}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                لپ تاپ 15 اینچی لنوو مدل Ideapad 3 - A
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/laptop3.jpg') }}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                لپ تاپ 15 اینچی لنوو مدل Ideapad 3 - A
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/laptop4.jpg') }}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                لپ تاپ 15 اینچی لنوو مدل Ideapad 3 - A
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/laptop5.jpg') }}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                لپ تاپ 15 اینچی لنوو مدل Ideapad 3 - A
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/laptop6.jpg') }}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                لپ تاپ 15 اینچی لنوو مدل Ideapad 3 - A
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <del><span>۴,۵۳۰,۰۰۰<span>تومان</span></span></del>
                                            <ins><span>۳,۳۹۵,۰۰۰<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/laptop7.jpg') }}"
                                                class="img-fluid" alt="img-slider">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                لپ تاپ 15 اینچی لنوو مدل Ideapad 3 - A
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
    <!--   slider-product-------------------->


    <!--banner----------------------------->
    <div class="col-12">
        <div class="banner" style=" height: auto;">
            <a href="#"><img src="{{ asset('home/images/promo/1000013242.jpg') }}" alt="banner"></a>
        </div>
    </div>
    <!--banner----------------------------->

    <!--   slider-product-------------------->
    <div class="col-lg-12 col-md-12 col-xs-12 pull-right">
        <div class="row">
            <div class="col-12">
                <div class="widget widget-product card">
                    <header class="card-header">
                        <span class="title-one">برندهای ویژه</span>
                    </header>
                    <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/brand/1000005582.png') }}" class="img-fluid"
                                                alt="brand" style="width:100px !important; height:100px !important;">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/brand/1000006973.png') }}" class="img-fluid"
                                                alt="brand" style="width:100px !important; height:100px !important;">
                                        </a>

                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/brand/1076.png') }}" class="img-fluid"
                                                alt="brand" style="width:100px !important; height:100px !important;">
                                        </a>

                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/brand/1078.png') }}" class="img-fluid"
                                                alt="brand" style="width:100px !important; height:100px !important;">
                                        </a>

                                    </div>
                                </div>
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/brand/1080.png') }}" class="img-fluid"
                                                alt="brand" style="width:100px !important; height:100px !important;">
                                        </a>

                                    </div>
                                </div>
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/brand/1086.png') }}" class="img-fluid"
                                                alt="brand" style="width:100px !important; height:100px !important;">
                                        </a>

                                    </div>
                                </div>
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/brand/2315.png') }}" class="img-fluid"
                                                alt="brand" style="width:100px !important; height:100px !important;">
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/111460776.jpg') }}"
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
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/111474228.jpg') }}"
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
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/112145268.jpg') }}"
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
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/111475300.jpg') }}"
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
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/113542184.jpg') }}"
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
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/111469793.jpg') }}"
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
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('home/images/product-slider-2/111472656.jpg') }}"
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
    <!--   slider-product-------------------->

@endsection
