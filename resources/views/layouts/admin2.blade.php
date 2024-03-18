<!doctype html>
<html lang="en">

<head>
    @include('livewire.admin.layouts.head')
    <title>@yield('title') | پنل مدیریت</title>
</head>
@php
        $v = verta();
        $v = $v->format('%d %B %Y');
        $user = \Auth::user();

@endphp
<body>
    <!-- Preloader -->
  <div id="preloader">
    <div id="ctn-preloader" class="ont-preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                <span data-text-preloader="لاراول لرن" class="letters-loading" style="color:#ff2d20;">
                    لاراول لرن
                 </span>
            </div>
        </div>

        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Preloader -->

    <!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
    <div class="ecaps-page-wrapper">
        <!-- Sidemenu Area -->
        @include('livewire.admin.layouts.sidebar')


        <!-- Page Content -->
        <div class="ecaps-page-content">
            <!-- Top Header Area -->
            @include('livewire.admin.layouts.header')

            <!-- Main Content Area -->
            <div class="main-content">
                @include('livewire.admin.layouts.breadcrump')
                @yield('content')
            </div>

        </div>
    </div>

    <!-- ======================================
    ********* Page Wrapper Area End ***********
    ======================================= -->
@include('livewire.admin.layouts.scripts')

</body>
</html>
