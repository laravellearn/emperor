@section('title', 'سطح دسترسی کاربر')
@section('styles')
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/default-assets/select.bootstrap4.css') }}">

@endsection

<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">سطح دسترسی کاربر: </h4>
                                <a href="{{ route('admin.users') }}" class="btn btn-success mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-list-alt"></i> لیست کاربران</a>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <form wire:submit.prevent='UserPermissionForm'>
                                            @include('errors.error')

                                            <div class="form-group">
                                                <label for="exampleInputEmail12">نقش ها:</label>
                                                <div wire:ignore>
                                                    <select class="js-example-basic-single form-control"
                                                        multiple="multiple" wire:model.lazy="roles" id="roles"
                                                        style="width: 100%;">
                                                        @foreach (\App\Models\Admin\Permissions\Role::all() as $role)
                                                            <option value="{{ $role->id }}"
                                                                {{ in_array($role->id,$user->roles()->pluck('id')->toArray())? 'selected': '' }}>
                                                                {{ $role->description }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail12">سطح دسترسی:</label>
                                                <div wire:ignore>
                                                    <select class="js-example-basic-single form-control"
                                                        multiple="multiple" wire:model.lazy="permissions"
                                                        id="permissions" style="width: 100%;">
                                                        @foreach (\App\Models\Admin\Permissions\Permission::all() as $permission)
                                                            <option value="{{ $permission->id }}"
                                                                {{ in_array($permission->id,$user->permissions()->pluck('id')->toArray())? 'selected': '' }}>
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


                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->

            </div>
        </div>
    </div>
    @section('scripts')
        <script>
            $(document).ready(function() {
                //roles
                $('#roles').select2();
                $('#roles').on('change', function(e) {
                    let data = $(this).val();
                    @this.set('roles', data);
                });
                window.livewire.on('RoleStore', () => {
                    $('#roles').select2();
                });
                //permissions
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
