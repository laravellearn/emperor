@section('title','برچسب های فوتر')
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
                                                <li class="{{ route('admin.settings.footer.label') ? 'active' : '' }}"><a href="{{ route('admin.settings.footer.label') }}"> <i class="fa fa-file-text-o"></i>برچسب ها </a></li>
                                                <li><a href="#"> <i class="ti-share"></i> ارسال پست الکترونیکی</a></li>
                                                <li><a href="#"> <i class="fa fa-certificate"></i> مهم</a></li>
                                                <li><a href="#"> <i class="fa fa-file-text-o"></i>پیش نویس <span class="badge badge-pill badge-warning inbox ml-2">3</span></a></li>
                                                <li><a href="#"> <i class="fa fa-trash-o"></i>سطل زباله <span class="badge badge-pill badge-danger inbox ml-2">4</span></a></li>
                                            </ul>
                                            <!-- Title -->
                                            <div class="categori-title mt-30">
                                                <h6 class="mb-3 primary-color-text">برچسب ها</h6>
                                            </div>
                                            <!-- List -->
                                            <ul class="category-list">
                                                <li><a href="#"> <i class="fa fa-circle text-navy"></i> مشتری</a></li>
                                                <li><a href="#"> <i class="fa fa-circle text-danger"></i> مهم</a></li>
                                                <li><a href="#"> <i class="fa fa-circle text-primary"></i> اجتماعی</a></li>
                                                <li><a href="#"> <i class="fa fa-circle text-info"></i> دیگر</a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mail-body--area">
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">متن برگشت به بالای سایت</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="upLabel" value="{{ $footer->upLabel }}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">تیتر فوتر اول</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="widgetLabel1" value="{{ $footer->widgetLabel1 }}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">تیتر فوتر دوم</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="widgetLabel2" value="{{ $footer->widgetLabel2 }}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">تیتر فوتر سوم</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="widgetLabel3" value="{{ $footer->widgetLabel3 }}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">تیتر فوتر چهارم</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="widgetLabel4" value="{{ $footer->widgetLabel4 }}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">تیتر فوتر پنجم</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="widgetLabel5" value="{{ $footer->widgetLabel5 }}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">متن خبرنامه</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="rssLabel" value="{{ $footer->rssLabel }}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">متن شبکه های اجتماعی</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="socialLabel" value="{{ $footer->socialLabel }}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">متن پشتیبانی</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="supportLabel" value="{{ $footer->supportLabel }}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">متن شماره تلفن</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="phoneLabel" value="{{ $footer->phoneLabel }}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">متن آدرس ایمیل</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="emailLabel" value="{{ $footer->emailLabel }}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">متن آدرس فروشگاه</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="addressLabel" value="{{ $footer->addressLabel }}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">متن </label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="upLabel" value="{{ $footer->upLabel }}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">متن </label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="upLabel" value="{{ $footer->upLabel }}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">متن </label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="upLabel" value="{{ $footer->upLabel }}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">متن </label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="upLabel" value="{{ $footer->upLabel }}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">متن </label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="upLabel" value="{{ $footer->upLabel }}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">متن </label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="upLabel" value="{{ $footer->upLabel }}" type="text">
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
