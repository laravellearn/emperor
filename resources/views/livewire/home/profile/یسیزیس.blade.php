<div>
    @push('styles')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
        <style>
            @page {
                size: auto;
                margin: 0mm;
            }



            @media print {

                #sendSmsToUser,
                .ribbon-card,
                .seller-header,
                footer,
                header,
                .font3,
                .button-bar,
                #inquiry-form,
                nav,
                .navbar,
                .carousel-indicators,
                .video-logo,
                .details-title {
                    display: none !important;
                }

                .carousel-inner .active.carousel-item img {
                    width: 150px !important;
                }

                .site-seller,
                .logo-seller {
                    display: none !important;
                }

                .container {
                    max-width: 100% !important;
                }

                .modal-fancy-img .card-img {

                    display: inline-block !important;
                }

                .address-crumb,
                #overlay,
                .parallax-background {
                    display: none !important;
                }

                .top-titr {
                    margin-top: 0 !important;
                }

                body {
                    padding-top: 0 !important;
                }

                .card-body {
                    line-height: 0.7;
                    padding-bottom: 10px !important;
                }

                .card {
                    border: none !important;
                }

                .inner-block {
                    padding: 0 !important;
                }

                .table td,
                .table th {
                    border-top: none !important;
                }

                .machinery-des {
                    padding-top: 0 !important;
                    padding-bottom: 0 !important;
                }


                .profile-bottom {
                    padding-top: 0 !important;
                }

                .profile-title {
                    padding-bottom: 0 !important;

                }

                .logo-print {
                    display: block !important;
                    margin-top: 40px !important;
                }

            }

            /* کاروسل */
            #myCarousel .list-inline {
                white-space: nowrap;
                overflow-x: auto;
            }

            #myCarousel .carousel-indicators {
                position: static;
                left: initial;
                width: initial;
                margin-left: initial;
                overflow: hidden;
            }

            #myCarousel .carousel-indicators>li {
                width: initial;
                height: auto;
                text-indent: initial;
            }



            #myCarousel .carousel-indicators>li.active img {
                opacity: 0.7;
            }

            .img-fluid {
                width: 100%;
                height: auto;
            }

            /* پایان کاروسل */

            span.spanlink {
                color: #0092cf;
                text-decoration: none;
                cursor: pointer;
            }

            span.spanlink:hover {
                color: #3073b2;
                text-decoration: none;
                cursor: pointer;
            }


            .input-group-addon,
            .input-group-btn {
                white-space: nowrap;
            }

            .input-group .form-control,
            .input-group-addon,
            .input-group-btn {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-align: center;
                align-items: center;
            }

            .input-group-addon {
                padding: 0.375rem 0.75rem;
                margin-bottom: 0;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: #495057;
                text-align: center;
                background-color: #e9ecef;
                border: 1px solid #ced4da;
                border-radius: 0.25rem;
            }

            @media (max-width: 991px) {
                .ribbon-dealer {
                    left: 0;
                }
            }

            .table td,
            .table th {
                text-align: right;
                vertical-align: middle;
                padding-right: 2rem;
            }

            .modal .fade .show {
                padding-right: 0 !important;

            }

            @media (max-width: 991px) {

                .ribbon-wrapper-red {
                    left: 10px;
                }
            }


            /* #myCarousel .carousel-indicators > li{


                      width: initial;
                    height: 70px;
                    text-indent: initial;
                    } */

            .img-fluid {
                width: 500px;
            }

            .img-fluid2 {
                width: 100px;
                height: 100px;
                object-fit: cover
            }


            .la-ball-beat,
            .la-ball-beat>div {
                position: relative;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            .la-ball-beat {
                display: block;
                font-size: 0;
                color: #eb9094;
            }

            .la-ball-beat.la-dark {
                color: #b30000;
            }

            .la-ball-beat>div {
                display: inline-block;
                float: none;
                background-color: currentColor;
                border: 0 solid currentColor;
            }

            .la-ball-beat {
                width: 54px;
                height: 18px;
            }

            .la-ball-beat>div {
                width: 10px;
                height: 10px;
                margin: 4px;
                border-radius: 100%;
                -webkit-animation: ball-beat .7s -.15s infinite linear;
                -moz-animation: ball-beat .7s -.15s infinite linear;
                -o-animation: ball-beat .7s -.15s infinite linear;
                animation: ball-beat .7s -.15s infinite linear;
            }

            .la-ball-beat>div:nth-child(2n-1) {
                -webkit-animation-delay: -.5s;
                -moz-animation-delay: -.5s;
                -o-animation-delay: -.5s;
                animation-delay: -.5s;
            }

            .la-ball-beat.la-sm {
                width: 26px;
                height: 8px;
                justify-content: center;
                align-items: center;
                width: 100%;
            }

            .la-ball-beat.la-sm>div {
                width: 4px;
                height: 4px;
                margin: 2px;
            }

            .la-ball-beat.la-2x {
                width: 108px;
                height: 36px;
            }

            .la-ball-beat.la-2x>div {
                width: 20px;
                height: 20px;
                margin: 8px;
            }

            .la-ball-beat.la-3x {
                width: 162px;
                height: 54px;
            }

            .la-ball-beat.la-3x>div {
                width: 30px;
                height: 30px;
                margin: 12px;
            }

            /*
                 * Animation
                 */
            @-webkit-keyframes ball-beat {
                50% {
                    opacity: .2;
                    -webkit-transform: scale(.75);
                    transform: scale(.75);
                }

                100% {
                    opacity: 1;
                    -webkit-transform: scale(1);
                    transform: scale(1);
                }
            }

            @-moz-keyframes ball-beat {
                50% {
                    opacity: .2;
                    -moz-transform: scale(.75);
                    transform: scale(.75);
                }

                100% {
                    opacity: 1;
                    -moz-transform: scale(1);
                    transform: scale(1);
                }
            }

            @-o-keyframes ball-beat {
                50% {
                    opacity: .2;
                    -o-transform: scale(.75);
                    transform: scale(.75);
                }

                100% {
                    opacity: 1;
                    -o-transform: scale(1);
                    transform: scale(1);
                }
            }

            @keyframes ball-beat {
                50% {
                    opacity: .2;
                    -webkit-transform: scale(.75);
                    -moz-transform: scale(.75);
                    -o-transform: scale(.75);
                    transform: scale(.75);
                }

                100% {
                    opacity: 1;
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                }
            }



            .modal-fancy-img .card-img {
                display: inline-block !important;
            }





            .table-striped tbody tr {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 0 2rem;
            }


            .table td,
            .table th {
                max-width: 100%;
                text-align: right;
                width: 100%;
                border-top: none !important;
            }
        </style>
    @endpush


    <div class="logo-print col-4" style="display:none;">
        <img src="{{ asset('admin\img\logo-print.png') }}">

    </div>

    <!-- بدنه محتوا -->
    <div class="details">
        <div id="overlay"></div>
        <div class="container" id="page-container">
            <div class="inner-block bg-white">
                <div class="display-align top-titr">
                    <div class="col-12">
                        <div class="display-align top-margin2">
                            <div class="col-lg-8 text center-align mx-auto">
                                <h1 class="top-margin2 details-title">{{ $product->name }}</h1>
                                <div class="description">
                                    <p>{{ $product->category->title }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- آدرس صفحه -->
                        <nav aria-label="breadcrumb" class="navigationbar">
                            <ol class="address-crumb">
                                <li class="address-crumb-item">
                                    <a href="{{ route('index') }}">
                                        <span class="hidden-desktop">
                                            <i class="fas fa-home"></i>
                                        </span>
                                        <span class="hidden-mobile">خانه</span>
                                    </a>
                                </li>
                                <li class="address-crumb-item">
                                    <a href="{{ route('subcategory.product-list', $product->category->slug) }}">
                                        <span>{{ $product->category->title }}</span>
                                    </a>
                                </li>
                                <li class="address-crumb-item">

                                    <span>{{ $product->name }}</span>

                                </li>

                            </ol>
                        </nav>

                        <fieldset>
                            <div class="profile-title profile-title-general">
                                <div class="display-align top-margin2">

                                    <div class="container ver-pad col-lg-6 ">
                                        <div class="display-align min-vh-100 "
                                            style="display:flex;justify-content:center;align-items:center;">
                                            <div id="myCarousel" class="carousel slide  ">
                                                <!-- اسلایدر آیتم ها -->
                                                <div class="carousel-inner" style="height:80%;">
                                                    @foreach ($product->images as $image)
                                                        <div class="{{ $loop->iteration == 1 ? 'active' : '' }} modal-fancy-img carousel-item"
                                                            data-slide-number="{{ $loop->iteration - 1 }}">
                                                            <img data-fancybox="gallery"
                                                                src="{{ asset($image->image) }}"
                                                                class="card-img img-fluid" style="height:auto;">
                                                        </div>
                                                    @endforeach
                                                    <a class="carousel-control-prev" href="#myCarousel" role="button"
                                                        data-slide="prev">
                                                        <span class="carousel-control-prev-icon"
                                                            aria-hidden="true"></span>
                                                        <span class=" label-input">قبل</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#myCarousel" role="button"
                                                        data-slide="next">
                                                        <span class="carousel-control-next-icon"
                                                            aria-hidden="true"></span>
                                                        <span class=" label-input">بعد</span>
                                                    </a>
                                                </div>


                                                <ul class="carousel-indicators list-inline mx-auto  hor-pad mt-3">
                                                    @foreach ($product->images as $image)
                                                        <li
                                                            class="list-inline-item {{ $loop->iteration == 1 ? 'active' : '' }}">
                                                            <a id="carousel-selector-{{ $loop->iteration - 1 }}"
                                                                {{ $loop->iteration == 1 ? 'class="selected"' : '' }}
                                                                data-slide-to="{{ $loop->iteration - 1 }}"
                                                                data-target="#myCarousel">
                                                                <img src="{{ asset($image->image) }}"
                                                                    class="img-fluid img-fluid2">
                                                            </a>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                            </div>
                                        </div>

                                        @if ($product->video)
                                            <div style="display:flex;flex-direction:column;align-items:center;"
                                                class="my-4  video-logo">
                                                <div class="col-8 py-3">
                                                    <video width="400" controls="" style="width:100%;">
                                                        <source src="{{ $product->video['video'] }}" type="video/mp4">
                                                        Your browser does not support HTML video.
                                                    </video>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <!--پایان کاروسل آیتمها-->

                                    <div class="col-lg-6 text center-align mx-auto"
                                        style="display:flex;max-height: fit-content;">
                                        <div class="card" style="width: 100%;height: fit-content;">
                                            <div class="card-body">
                                                <p class="card-text">
                                                    <b>{{ $product->vendor->user->name }}</b>
                                                    @auth
                                                        <a href="{{ route('vendor-detail', $product->vendor->slug) }}"
                                                            target="TOP"><br>
                                                            <span class="font3" style="margin-left: 0.25em;">[ مشخصات
                                                                فروشنده ]</span></a>
                                                    @endauth
                                                    @guest
                                                        <a href="{{ route('register') }}" target="TOP"
                                                            title="برای مشاهده مشخصات فروشنده ثبت نام کنید"><br>
                                                            <span class="font3" style="margin-left: 0.25em;">[ مشخصات
                                                                فروشنده ]</span></a>
                                                    @endguest
                                                </p>
                                                @if ($product->location != null)
                                                    <p class="card-text">
                                                        <br>
                                                        @if ($product->location != null)
                                                            {{ $product->location }}
                                                        @endif
                                                        <br>
                                                        <br>
                                                    </p>
                                                @endif

                                                <form method="post" target="TOP">
                                                    <input value="" type="hidden" name="">
                                                </form>

                                                <table class="table table-striped">
                                                    <tr>
                                                        {{-- <td>
                                          <b>کد دستگاه:</b>
                                          {{$product->itemNo}}</td> --}}
                                                        <td>
                                                            <b>تعداد:</b>
                                                            {{ $product->quantity }}
                                                        </td>
                                                        <td><b>تاریخ:</b>
                                                            {{ date('d-m-Y', strtotime($product->created_at)) }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <b>سال تولید:</b>
                                                            {{ $product->year_of_manufacture }}
                                                        </td>
                                                        <td>
                                                            <b>موقعیت:</b>
                                                            <span> {{ $product->province->title }}-{{ $product->city->title }}
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">قیمت: </th>
                                                        <td class="three-button display-align justify-content-start">
                                                            {{ number_format($product->price) }} تومان
                                                            {{-- <button href="" class="btn-all btn-primary btn-all-small my-1"  >
                                            <a href="{{route('dealer-inquiry',$product->itemNo)}}" class="text-white ">
                                           درخواست مظنه
                                          </a>
                                        </button>  --}}
                                                            {{-- <button class="btn-all btn-primary btn-all-small" data-toggle="modal" data-target="#modalForm" style="cursor: pointer;"> پیشنهاد قیمت    </button> --}}
                                                            {{-- <button class="btn-all btn-all-small btn-green my-1">
                                          <a href="escrew-payment.html" class="text-white">پرداخت امانی</a>
                                          </button> --}}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">سازنده:</th>
                                                        <td colspan="2"><b>{{ $product->manufacturer }}</b></td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">مدل:</th>
                                                        <td colspan="2"><b>{{ $product->model }}</b></td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">نوع ماشین:</th>
                                                        <td colspan="2"><b>{{ $product->name }}</b></td>
                                                    </tr>


                                                    <tr>
                                                        <th scope="row">ماشین موجود در انبار:</th>
                                                        <td colspan="2">
                                                            @switch($product->isSold)
                                                                @case(1)
                                                                    خیر
                                                                @break

                                                                @case(0)
                                                                    بله
                                                                @break

                                                                @default
                                                            @endswitch

                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">کد فروشنده:</th>
                                                        <td colspan="2">{{ $product->vendor->identityNumber }}</td>
                                                    </tr>

                                                </table>
                                                {{-- @auth
                                                    <ul style="padding:0;">
                                                        <li style="list-style-type: none;">
                                                            <a
                                                                href="tel:@if ($product->vendor->phone != null) {{ $product->vendor->phone }}@else{{ $product->vendor->user->mobile }} @endif"><span>
                                                                    <i class="fa fa-phone fa-lg"
                                                                        style="color: #28a745;"></i>
                                                                    <span class="text-dark">تلفن</span>
                                                                    <span class="text-dark">
                                                                        @if ($product->vendor->phone != null)
                                                                            {{ $product->vendor->phone }}@else{{ $product->vendor->user->mobile }}
                                                                        @endif
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                @endauth
                                                <div class="card ribbon-card mx-auto">
                                                    @if ($product->vendor->isQualified == 1)
                                                        <div class="ribbon-wrapper-red ribbon-dealer">
                                                            <div class="ribbon-red">
                                                                <span>فروشنده</span>
                                                                <span>تایید شده</span>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    <div class="seller-header">
                                                        <div class="center-align">
                                                            <img src="{{ asset('frontend/img/verified-user-logo.png') }}"
                                                                alt="verified-user-logo" id="verified-user">
                                                        </div>
                                                        <div class="center-align" style="font-size: 16px;">
                                                            <p>عضو از سال {{ $product->vendor->created_at }}</p>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                            <div class="card-footer">
                                                {{-- <a class="btn-all btn-all-small btn-green ver-margin " href="#inquiry-form">
                  <i class="far fa-envelope fa-lg ">
                  </i> درخواست استعلام</a> --}}
                                                @auth
                                                    <button type="button" id="sendSmsToUser"
                                                        wire:click.prevent="sendSmsToUser({{ auth()->user()->mobile }},{{ $product->itemNo }},'{{ auth()->user()->name }}',{{ $product->vendor->user->mobile }})"
                                                        class="btn-all btn-primary btn-all-small ver-margin">
                                                        <i class="fa fa-phone fa-lg" style="color: #ffffff;"></i> لطفا با
                                                        من تماس بگیرید</button>
                                                    <script>
                                                        const sendSmsToUser = document.querySelector('#sendSmsToUser')
                                                        sendSmsToUser.addEventListener('click', () => {
                                                            sendSmsToUser.innerHTML = " در حال فرستادن پیام ..."
                                                            setTimeout(() => {
                                                                sendSmsToUser.innerHTML =
                                                                    " <i class='fa fa-phone fa-lg' style='color: #ffffff;'></i> لطفا با من تماس بگیرید "

                                                            }, 3000);

                                                        })
                                                    </script>
                                                @endauth
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="profile-bottom">
                                <div class="button-bar">
                                    <div class="display-align bottom-margin">
                                        <div class="col-xs-4 center-align mx-auto bottom-margin">

                                            <i class="fas fa-star" style="color: #f0b000;"></i> کد:
                                            {{ $product->itemNo }}
                                        </div>
                                        <div class="col-xs-4 center-align mx-auto bottom-margin">
                                            <a class="btn-all btn-all-small btn-green  "
                                                href="{{ route('dealer-inquiry', $product->itemNo) }}">
                                                <i class="far fa-envelope fa-lg"></i> درخواست استعلام</a>
                                        </div>
                                        <div class="col-xs-4 center-align mx-auto bottom-margin">
                                            <button class="btn-all btn-all-small btn-light" onclick="window.print();">
                                                <span class="hidden-mobile">چاپ کردن</span>
                                                <i class="fas fa-print fa-lg"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive-md">
                                    <table class="table table-striped">
                                        <tbody>


                                            @if ($product->logo)
                                                <tr class="logo-seller">
                                                    <th scope="row">لوگوی فروشنده:</th>
                                                    <td colspan="2"><b>
                                                            <img style="width:220px;"
                                                                src="{{ $product->logo['logo'] }}" alt="logo">
                                                        </b>
                                                    </td>
                                                </tr>
                                            @endif
                                            @if ($product->site_url != null)
                                                <tr class="site-seller">
                                                    <th scope="row">آدرس سایت:</th>
                                                    <td colspan="2"><b>
                                                            <a target="_blank" class="btn-all btn-all-small btn-green"
                                                                href="https://{{ $product->site_url }}">
                                                                سایت فروشنده</a>
                                                        </b>
                                                    </td>
                                                </tr>
                                            @endif


                                        </tbody>
                                    </table>
                                </div>

                                <div class="table-responsive-md">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <th scope="row">توضیحات:</th>
                                                <td colspan="2" class="machinery-des">
                                                    <h5 style="font-weight: 700;">
                                                        {!! $product->description !!}
                                                    </h5>

                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                                <div class="display-align">
                                    <div class="col-12 center-align">
                                        <span> </span>
                                        <div class="fb-share-btn">
                                            <span>
                                                {{-- <iframe name="" width="100px" height="30px" data-testid="fb:share_button Facebook Social Plugin" title="fb:share_button Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.5/plugins/share_button.php?app_id=838753719527316&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df6ddd9854e9f54%26domain%3Dwww.resale.info%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fwww.resale.info%252Ff2bc96a1d90e13c%26relation%3Dparent.parent&amp;container_width=1054&amp;href=https%3A%2F%2Fwww.resale.info%2Fostas-3r-ohs-2570-x-1316-sheet-metal-bending-machine-3-rollers%2FNo-156640261&amp;layout=button&amp;locale=en_US&amp;sdk=joey" ></iframe> --}}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="container  " id="inquiry-form">
                <div class="display-align">
                  <div class="col-lg-12 form-box mx-auto">
                    <form  wire:submit.prevent="store" >
                        <fieldset>
                      <div class="form-middle ">
                        <h3 class="text-white text-center">استعلام</h3></div>
                      <div class="form-bottom">
                        <div class="display-align">
                          <div class="col-lg-6">
                            <div class="align-form">
                                <label class="label-input" for="company-label">نام:</label>
                                <div class="input-group bottom-margin mr-sm-2 mb-sm-0">
                                  <div class="input-group-addon" style="width: 2.6rem">
                                    <i class="fas fa-user fa-lg"></i>
                                  </div>
                                  <select name="" class="custom-select rounded-0">
                                    <option value="Mr" selected="">آقا</option>
                                    <option value="Ms">خانم</option>
                                  </select>
                                  <input type="text" name="" wire:model.defer="state.title" class="form-control" placeholder="نام" required="" oninvalid="this.setCustomValidity('لطفا  نام خود را وارد کنید!')"  oninput="this.setCustomValidity('')">
                                </div>
                              </div>
                              <div class="align-form">
                                <label class="label-input" for="company-label">آدرس:</label>
                                <div class="input-group bottom-margin mr-sm-2 mb-sm-0">
                                  <div class="input-group-addon" style="width: 2.6rem">
                                    <i class="fas fa-home fa-lg"></i>
                                  </div>
                                  <input type="text" name="" wire:model = "state.address" class="form-control @error('address') is-invalid @enderror" placeholder="آدرس">
                                  @error('address')<div class="invalid-feedback">{{ $message }}</div> @enderror

                                </div>
                              </div>
                              <div class="align-form">
                                <label class="label-input" for="company-label">  کدپستی:</label>
                                <div class="input-group bottom-margin mr-sm-2 mb-sm-0">
                                  <div class="input-group-addon" style="width: 2.6rem">

                                    <i class="fas fa-mailbox fa-lg"></i>
                                  </div>
                                  <input type="number" name="" class="form-control  @error('postal') is-invalid @enderror" wire:model = "state.postal" placeholder="  کدپستی" >
                                  @error('postal')<div class="invalid-feedback">{{ $message }}</div> @enderror

                                </div>
                              </div>
                          </div>
                          <div class="col-lg-6">
                           <div class="align-form">
                              <label class="label-input" for="company-label">ایمیل:</label>
                              <div class="input-group bottom-margin mr-sm-2 mb-sm-0">
                                <div class="input-group-addon" style="width: 2.6rem">
                                  <i class="fas fa-at fa-lg"></i>
                                </div>
                                <input type="email" name="" wire:model.defer="state.email" class="form-control  @error('email') is-invalid @enderror" placeholder="ایمیل" >
                                @error('email')<div class="invalid-feedback">{{ $message }}</div> @enderror

                              </div>
                            </div>
                            <div class="align-form">
                                <label class="label-input" for="company-label">موبایل:</label>
                                <div class="input-group bottom-margin mr-sm-2 mb-sm-0">
                                  <div class="input-group-addon" style="width: 2.6rem">
                                    <i class="fas fa-phone fa-lg"></i>
                                  </div>
                                  <input type="number" name="" wire:model.defer="state.phone" class="form-control  @error('phone') is-invalid @enderror" placeholder="تلفن" required="" oninvalid="this.setCustomValidity('لطفا شماره موبایل خود را وارد کنید!')"  oninput="this.setCustomValidity('')">
                                  @error('phone')<div class="invalid-feedback">{{ $message }}</div> @enderror

                                </div>
                              </div>
                          </div>
                        </div>

                        <div class="display-align">
                            <div class="col-lg-12">
                              <div class="align-form">
                                <p class="d-inline">لطفا نوع استعلام را انتخاب کنید:</p>
                                    <div class="category-checkbox d-inline ml-4">
                                            <label class="options">
                                    <input type="checkbox" name="" checked value=""  wire:model.defer="state.isPrice">
                                     <span class="label-text">قیمت</span>
                                            </label>
                                        </div>
                                            <div class="category-checkbox d-inline ml-2">
                                            <label class="options">
                                    <input type="checkbox" name="" value="" wire:model.defer="state.moreInformation">
                                    <span class="label-text">اطلاعات بیشتر</span>
                                            </label>
                                        </div>
                                        <div class="category-checkbox d-inline ml-2">
                                            <label class="options">
                                    <input type="checkbox" name="" value="" wire:model.defer="state.morePhotos">
                                     <span class="label-text">عکسهای بیشتر</span>
                                            </label>
                                        </div>
                                        <div class="category-checkbox d-inline ml-2">
                                            <label class="options">
                                          <input type="checkbox" name="" value="" wire:model.defer="state.offer">
                                         <span class="label-text">تخفیف</span>
                                            </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                          <div class="display-align">
                            <div class="col-lg-12">
                              <div class="align-form">
                                <label class="label-input" for="msg-text">متن پیام</label>
                                <textarea  placeholder=" جناب {{$product->vendor->user->name}} عزیز من به اطلاعاتی در مورد دستگاه شما نیاز مند هستم     . ..." wire:model.defer="state.comment" class="msg-text form-control" id="msg-text">

                                 </textarea>
                              </div>
                            </div>
                          </div>

                        <div class="display-align top-margin2">
                            <div class="col-lg-12 center-align">
                              @error('storeMessage')
                              <div class="alert alert-success text-right success-error" role="alert">
                                {{$message}}
                              </div>
                              <script>
                                setTimeout(() => {
                                  document.querySelector('.success-error').classList.add('d-none');

                                }, 3000);
                              </script>
                              @enderror
                                <button type="submit" name="" value="" class="btn-all btn-green " style="cursor: pointer;">ارسال درخواست</button>
                            </div>
                          </div>
                      </div>
                  </fieldset>
                </form>
              </div>
               </div>
              </div> --}}
    </div>

    @push('footer-scripts')
        <div class="parallax-background">
            <img src="{{ asset('frontend/background.jpg') }}">
        </div>
        <script>
            jssor_1_slider_init();
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
        <script>
        @endpush
            <
            /div>
