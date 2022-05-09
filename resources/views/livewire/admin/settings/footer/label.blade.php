@section('title', 'برچسب های فوتر')
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
                                                    <li class="active"><a
                                                            href="{{ route('admin.settings.footer.label') }}"> برچسب ها
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

                                <div class="mail-body--area">
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">متن برگشت به بالای سایت:</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model="upLabel" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">تیتر فوتر اول:</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model="widgetLabel1" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">تیتر فوتر دوم:</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model="widgetLabel2" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">تیتر فوتر سوم:</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model="widgetLabel3" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">تیتر فوتر چهارم:</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model="widgetLabel4" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">تیتر فوتر پنجم:</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model="widgetLabel5" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">متن خبرنامه:</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model="rssLabel" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">متن شبکه های اجتماعی:</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model="socialLabel" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">متن پشتیبانی:</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model="supportLabel" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">متن شماره تلفن:</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model="phoneLabel" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">متن آدرس ایمیل:</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model="emailLabel" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">متن آدرس فروشگاه:</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model="addressLabel" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">تیتر درباره فروشگاه: </label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model="aboutHeadLabel" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">متن درباره فروشگاه: </label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model="aboutbodyLabel" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">متن کپی رایت: </label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model="copyRight" type="text">
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
