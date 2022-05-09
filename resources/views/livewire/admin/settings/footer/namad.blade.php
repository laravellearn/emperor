@section('title', 'نمادهای سایت')
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
                                                    <li class="active"><a
                                                            href="{{ route('admin.settings.footer.namad') }}"> نمادهای
                                                            سایت
                                                        </a></li>
                                                @endcan
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mail-body--area">
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">نمادهای اعتماد:</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <textarea class="form-control" style="text-align:left" wire:model="enamad" type="text"></textarea>
                                        </div>
                                    </div>
                                    <label style="font-weight:bold">اپلیکیشن موبایل:</label>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <input class="form-control" wire:model="linkApp1" type="text"
                                                style="text-align:left" placeholder="لینک اپلیکیشن">
                                        </div>
                                        <div class="col-lg-6">
                                            <input class="form-control" wire:model="imageApp1" type="text"
                                                style="text-align:left" placeholder="تصویر">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <input class="form-control" wire:model="linkApp2" type="text"
                                                style="text-align:left" placeholder="لینک اپلیکیشن">
                                        </div>
                                        <div class="col-lg-6">
                                            <input class="form-control" wire:model="imageApp2" type="text"
                                                style="text-align:left" placeholder="تصویر">
                                        </div>
                                    </div>
                                    <button type="submit" wire:click="update()"
                                        class="btn btn-outline-success mb-2 mr-2" style="float:left;"><i
                                            class="fa fa-save"></i> ذخیره</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
