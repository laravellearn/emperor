    <!-- Must needed plugins to the run this Template -->
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/bundle.js') }}"></script>
    <script src="{{ asset('admin/js/default-assets/date-time.js') }}"></script>
    <script src="{{ asset('admin/js/default-assets/setting.js') }}"></script>
    <script src="{{ asset('admin/js/default-assets/bootstrap-growl.js') }}"></script>

    <!-- Active JS -->
    <script src="{{ asset('admin/js/default-assets/active.js') }}"></script>

    <!-- These plugins only need for the run this page -->
    <script src="{{ asset('admin/js/default-assets/peity.min.js') }}"></script>
    <script src="{{ asset('admin/js/default-assets/peity-demo.js') }}"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}" defer></script>

    <livewire:scripts />
    @yield('scripts')
