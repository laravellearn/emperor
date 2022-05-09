@section('title', 'تنظیمات فوتر')
<div>
    <div class="container-fluid">
        <div class="inbox-area">
            <div class="row">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-body pb-0">
                            <div class="d-sm-flex">
                                <div class="mail-side-menu mb-30">
                                    <div class="ibox-content mailbox-content">
                                        <div class="file-manager clearfix">
                                            <!-- Title -->
                                            <ul class="folder-list">
                                                @can('setting-footer-label')
                                                    <li><a href="{{ route('admin.settings.footer.label') }}"> برچسب ها
                                                        </a></li>
                                                @endcan
                                                @can('settings-footer-social')
                                                    <li><a href="{{ route('admin.settings.footer.social') }}"> شبکه های
                                                            اجتماعی </a></li>
                                                @endcan
                                                @can('settings-footer-logo')
                                                    <li><a href="{{ route('admin.settings.footer.logo') }}"> لوگوهای فوتر
                                                        </a></li>
                                                @endcan
                                                @can('settings-footer-menu')
                                                    <li><a href="{{ route('admin.settings.footer.menu') }}"> منوهای
                                                            فوتر </a></li>
                                                @endcan
                                                @can('settings-footer-namad')
                                                    <li><a href="{{ route('admin.settings.footer.namad') }}"> نمادهای سایت
                                                        </a></li>
                                                @endcan

                                            </ul>
                                            <div class="clearfix"></div>
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
