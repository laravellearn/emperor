<!DOCTYPE html>
<html lang="fa">

<head>
    @include('livewire.home.layouts.head')
    <title>@yield('title')|دیجی استور</title>
</head>

<body>
    <livewire:home.layouts.header>
    {{ $slot }}
    <livewire:home.layouts.footer>
    @include('livewire.home.layouts.scripts')
</body>
</html>
