@section('title', 'سطح دسترسی ها')
@section('styles')
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/default-assets/select.bootstrap4.css') }}">

@endsection
<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4 box-margin height-card">
                        <div class="card card-body">
                            <h4 class="card-title">افزودن سطح دسترسی</h4>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form wire:submit.prevent='PermissionForm'>
                                        <div class="form-group">
                                            <label for="exampleInputEmail111">عنوان دسترسی(لاتین):</label>
                                            <input type="text" wire:model.lazy='permission.title' class="form-control"
                                                id="exampleInputEmail111">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail12">توضیحات دسترسی(فارسی):</label>
                                            <input type="text" wire:model.lazy='permission.description' class="form-control"
                                                id="exampleInputEmail111">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail12">نقش ها:</label>
                                            <select class="js-example-basic-single form-control" multiple="multiple"
                                                wire:model.lazy="roles" style="width: 100%;">
                                                @foreach (\App\Models\Admin\Permissions\Role::all() as $role)
                                                    <option value="{{ $role->id }}">{{ $role->description }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-outline-success mb-2 mr-2"
                                            style="float:left;"><i class="fa fa-save"></i> ذخیره</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-8 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">لیست سطح دسترسی ها</h4>
                                <a href="{{ route('admin.permissions.trash') }}" type="button" class="btn btn-danger mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-refresh"></i>  سطل زباله
                                    <span class="badge badge-danger">
                                        {{ \App\Models\Admin\Permissions\Permission::onlyTrashed()->count() }}
                                    </span>
                                    </a>
                                <button type="button" class="btn btn-primary mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-file-excel-o"></i> خروجی
                                    اکسل</button>
                                <hr>
                                <input wire:model="search" type="search" class="form-control mb-2 w-50 float-left"
                                    placeholder="جستجو...">

                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                    style="width:102%" wire:init='loadRole'>
                                    <thead>
                                        <tr>
                                            <th>عنوان دسترسی</th>
                                            <th>توضیحات</th>
                                            <th>نقش(ها)</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>

                                    @if ($readyToLoad)
                                        <tbody>
                                            @foreach ($permissions as $permission)
                                                <tr>
                                                    <td>{{ $permission->title }}</td>
                                                    <td>{{ $permission->description }}</td>
                                                    <td>
                                                        @foreach ($permission->roles as $role)
                                                            <span
                                                                style="border: 1px solid #ccc;padding: 0px 2px;border-radius: 3px;">{{ $role->description }}</span>
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.permissions.edit',$permission->id) }}" class="action-icon"> <i
                                                                class="zmdi zmdi-edit zmdi-custom"></i></a>
                                                        <button wire:click="deleteId({{ $permission->id }})"
                                                            data-toggle="modal" data-target="#exampleModal"
                                                            class="action-icon"> <i
                                                                class="zmdi zmdi-delete zmdi-custom"></i></button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    @else
                                        <div class="alert alert-warning">
                                            در حال بارگزاری اطلاعات از پایگاه داده ....
                                        </div>
                                    @endif
                                </table>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->

            </div>
        </div>
    </div>
    @include('livewire.admin.include.modal')

    <script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}" defer></script>

    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
</div>
