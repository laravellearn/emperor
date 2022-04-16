@section('title','لوگو های فوتر')
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
                                                <li><a href="{{ route('admin.settings.footer.social') }}"> شبکه های اجتماعی </a></li>
                                                <li class="active"><a href="{{ route('admin.settings.footer.logo') }}"> لوگوهای فوتر </a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mail-body--area">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-xl-4 box-margin height-card">
                                                <div class="card card-body">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-xs-12">
                                                            <form role="form" wire:submit.prevent='LogoForm'>
                                                                @include('errors.error')
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail111">عنوان لوگو:</label>
                                                                    <input type="text" wire:model="Footerlogo.title" class="form-control" id="exampleInputEmail111">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail12">جایگاه لوگو:</label>
                                                                    <select class="form-control"  wire:model="Footerlogo.type" style="width: 100%;">
                                                                        <option value="">-- هیچکدام --</option>
                                                                        <option value="top">لوگوی بالای فوتر</option>
                                                                        <option value="bottom">لوگوی پایین فوتر</option>
                                                                      </select>
                                                                </div>

                                                                <div class="checkbox checkbox-primary d-inline">
                                                                    <input type="checkbox" wire:model="Footerlogo.isActive" id="checkbox-p-1" checked="">
                                                                    <label for="checkbox-p-1" class="cr">فعال</label>
                                                                </div>
                                                                <button type="submit" class="btn btn-outline-success mb-2 mr-2" style="float:left;"><i class="fa fa-save"></i> ذخیره</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-lg-8 box-margin">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title mb-2">لیست لوگو های فوتر</h4>
                                                        <button type="button" class="btn btn-danger mb-2 mr-2" style="float:left;margin-top:-37px;"><i class="fa fa-refresh"></i> سطل زباله</button>
                                                        <button type="button" class="btn btn-primary mb-2 mr-2" style="float:left;margin-top:-37px;"><i class="fa fa-file-excel-o"></i> خروجی اکسل</button>
                                                        <hr>

                                                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                                            <thead>
                                                                <tr>
                                                                    <th>تصویر</th>
                                                                    <th>عنوان لوگو</th>
                                                                    <th>جایگاه</th>
                                                                    <th>وضعیت</th>
                                                                    <th>عملیات</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <tr>
                                                                    <td>نام کاربری</td>
                                                                    <td>سیستم</td>
                                                                    <td>شرکت</td>
                                                                    <td>35</td>
                                                                    <td>
                                                                        <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-edit zmdi-custom"></i></a>
                                                                        <a href="javascript:void(0);" class="action-icon"> <i class="zmdi zmdi-delete zmdi-custom"></i></a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                    </div> <!-- end card body-->
                                                </div> <!-- end card -->
                                            </div><!-- end col-->
                                        </div>
                                        <!-- end row-->

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
