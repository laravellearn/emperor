@section('title', 'ویرایش نقش کاربری')
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
                            <h4 class="card-title">ویرایش نقش</h4>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form wire:submit.prevent='RoleForm'>
                                        @include('errors.error')

                                        <div class="form-group">
                                            <label for="exampleInputEmail111">عنوان نقش(لاتین):</label>
                                            <input type="text" wire:model.lazy='role.title' class="form-control"
                                                id="exampleInputEmail111">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail12">توضیحات نقش(فارسی):</label>
                                            <input type="text" wire:model.lazy='role.description' class="form-control"
                                                id="exampleInputEmail111">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail12">سطح دسترسی ها:</label>
                                            <div wire:ignore>
                                                <select class="js-example-basic-single form-control" multiple="multiple"
                                                    wire:model.lazy="permissions" id="permissions" style="width: 100%;">
                                                    @foreach (\App\Models\Admin\Permissions\Permission::all() as $permission)
                                                        <option value="{{ $permission->id }}"
                                                            {{ in_array($permission->id,$role->permissions()->pluck('id')->toArray())? 'selected': '' }}>
                                                            {{ $permission->description }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
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
                                <h4 class="card-title mb-2">لیست نقش ها</h4>
                                @can('role-trash')
                                    <a href="{{ route('admin.roles.trash') }}" type="button"
                                        class="btn btn-danger mb-2 mr-2" style="float:left;margin-top:-37px;"><i
                                            class="fa fa-trash"></i> سطل زباله <span class="badge badge-danger">
                                            {{ \App\Models\Admin\Permissions\Role::onlyTrashed()->count() }}
                                        </span></a>
                                @endcan
                                {{-- <button type="button" class="btn btn-primary mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-file-excel-o"></i> خروجی
                                    اکسل</button> --}}
                                <a href="{{ route('admin.roles') }}" class="btn btn-success mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-plus-square"></i> افزودن</a>

                                <hr>
                                <input wire:model="search" type="search" class="form-control mb-2 w-50 float-left"
                                    placeholder="جستجو...">

                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                    style="width:102%" wire:init='loadRole'>
                                    <thead>
                                        <tr>
                                            <th>عنوان نقش</th>
                                            <th>توضیحات</th>
                                            <th>سطوح دسترسی</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>

                                    @if ($readyToLoad)
                                        <tbody>
                                            @foreach ($roles as $role)
                                                <tr>
                                                    <td>{{ $role->title }}</td>
                                                    <td>{{ $role->description }}</td>
                                                    <td>
                                                        @foreach ($role->permissions as $permission)
                                                            <span
                                                                style="border: 1px solid #ccc;padding: 0px 2px;border-radius: 3px;">{{ $permission->description }}</span>
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        @can('role-edit')
                                                            <a href="{{ route('admin.roles.edit', $role->id) }}"
                                                                class="action-icon"> <i
                                                                    class="zmdi zmdi-edit zmdi-custom"></i></a>
                                                        @endcan
                                                        @can('role-delete')
                                                            <button wire:click="deleteId({{ $role->id }})"
                                                                data-toggle="modal" data-target="#exampleModal"
                                                                class="action-icon"> <i
                                                                    class="zmdi zmdi-delete zmdi-custom"></i></button>
                                                        @endcan
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        {{ $roles->links() }}
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

    @section('scripts')
        <script>
            $(document).ready(function() {
                $('#permissions').select2();
                $('#permissions').on('change', function(e) {
                    let data = $(this).val();
                    @this.set('permissions', data);
                });
                window.livewire.on('PermissionStore', () => {
                    $('#permissions').select2();
                });
            });
        </script>
    @endsection
</div>
