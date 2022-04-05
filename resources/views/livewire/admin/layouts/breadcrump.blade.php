<nav aria-label="خرده نان" class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">داشبورد</a></li>
        <li class="breadcrumb-item"><a href="{{ request()->url() }}">@yield('title')</a></li>
    </ol>
</nav>
