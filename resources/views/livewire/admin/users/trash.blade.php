@section('title', 'سطل زباله کاربران')
<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid" wire:init='loadUser'>
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">لیست کاربران حذف شده</h4>
                                <a href="{{ route('admin.users') }}" class="btn btn-success mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-list-alt"></i> لیست کاربران</a>
                                <hr>
                                <input wire:model="search" type="search" class="form-control mb-2 w-50 float-left"
                                    placeholder="جستجو...">

                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>تصویر</th>
                                            <th>نام</th>
                                            <th>نقش کاربری</th>
                                            <th>پست الکترونیکی</th>
                                            <th>موبایل</th>
                                            <th>نوع کاربر</th>
                                            <th>وضعیت</th>
                                            <th>تاریخ ایجاد</th>
                                            <th>تاریخ حذف</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>

                                    @if ($readyToLoad)
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>
                                                        <img src="{{ $user->profilePhoto }}" width="30px"
                                                            style="border-radius:100%">
                                                    </td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>
                                                        @foreach ($user->roles as $role)
                                                            <span
                                                                style="border: 1px solid #ccc;padding: 0px 2px;border-radius: 3px;">{{ $role->description }}</span>
                                                        @endforeach
                                                    </td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->mobile }}</td>
                                                    <td>
                                                        @switch($user->typeUser)
                                                            @case('user')
                                                                کاربر عادی
                                                            @break

                                                            @case('admin')
                                                                مدیر
                                                            @break

                                                            @case('vendor')
                                                                فروشنده
                                                            @break

                                                            @default
                                                                دیگر
                                                        @endswitch
                                                    </td>
                                                    <td>
                                                        @if ($user->isActive == 1)
                                                            <span class="badge badge-success">فعال</span>
                                                        @else
                                                            <span class="badge badge-danger">غیرفعال</span>
                                                        @endif
                                                    </td>
                                                    <td>{{ $user->created_at }}</td>
                                                    <td>{{ $user->deleted_at }}</td>
                                                    <td>
                                                        @can('user-restore')
                                                            <button wire:click="restore({{ $user->id }})"
                                                                class="action-icon">
                                                                <i class="zmdi zmdi-replay zmdi-custom"></i></button>
                                                        @endcan
                                                        @can('user-forceDelete')
                                                            <button wire:click="deleteId({{ $user->id }})"
                                                                data-toggle="modal" data-target="#exampleModal"
                                                                class="action-icon"> <i
                                                                    class="zmdi zmdi-delete zmdi-custom"></i></button>
                                                        @endcan
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                        {{ $users->links() }}
                                    @else
                                        <div class="alert alert-warning">
                                            در حال بارگزاری اطلاعات از پایگاه داده ....
                                        </div>
                                    @endif

                                </table>
                                @include('livewire.admin.include.modal')

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->

            </div>
        </div>
    </div>
</div>
