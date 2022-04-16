@section('title','شبکه های اجتماعی فوتر')
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
                                                <li><a href="{{ route('admin.settings.footer.label') }}"> برچسب ها </a></li>
                                                <li class="active"><a href="{{ route('admin.settings.footer.social') }}"> شبکه های اجتماعی </a></li>
                                                <li><a href="{{ route('admin.settings.footer.logo') }}"> لوگوهای فوتر </a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mail-body--area">
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">آدرس فروشگاه:</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model="address" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">آدرس ایمیل سایت:</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model="email" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">شماره تماس فروشگاه:</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model="phone" type="text">
                                        </div>
                                    </div>
                                    <label style="font-weight:bold">شبکه های اجتماعی</label>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <input class="form-control" wire:model="socialIcon1" type="text" style="text-align:left" placeholder="آیکون">
                                        </div>
                                        <div class="col-lg-6">
                                            <input class="form-control" wire:model="socialLink1" type="text" style="text-align:left" placeholder="لینک شبکه اجتماعی">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <input class="form-control" wire:model="socialIcon2" type="text" style="text-align:left" placeholder="آیکون">
                                        </div>
                                        <div class="col-lg-6">
                                            <input class="form-control" wire:model="socialLink2" type="text" style="text-align:left" placeholder="لینک شبکه اجتماعی">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <input class="form-control" wire:model="socialIcon3" type="text" style="text-align:left" placeholder="آیکون">
                                        </div>
                                        <div class="col-lg-6">
                                            <input class="form-control" wire:model="socialLink3" type="text" style="text-align:left" placeholder="لینک شبکه اجتماعی">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <input class="form-control" wire:model="socialIcon4" type="text" style="text-align:left" placeholder="آیکون">
                                        </div>
                                        <div class="col-lg-6">
                                            <input class="form-control" wire:model="socialLink4" type="text" style="text-align:left" placeholder="لینک شبکه اجتماعی">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <input class="form-control" wire:model="socialIcon5" type="text" style="text-align:left" placeholder="آیکون">
                                        </div>
                                        <div class="col-lg-6">
                                            <input class="form-control" wire:model="socialLink5" type="text" style="text-align:left" placeholder="لینک شبکه اجتماعی">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <input class="form-control" wire:model="socialIcon6" type="text" style="text-align:left" placeholder="آیکون">
                                        </div>
                                        <div class="col-lg-6">
                                            <input class="form-control" wire:model="socialLink6" type="text" style="text-align:left" placeholder="لینک شبکه اجتماعی">
                                        </div>
                                    </div>
                                    <button type="submit" wire:click="update()" class="btn btn-outline-success mb-2 mr-2" style="float:left;"><i class="fa fa-save"></i> ذخیره</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
