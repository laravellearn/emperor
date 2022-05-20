@section('title', 'کاربران')
<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid" wire:init='loadUser'>
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">لیست کاربران</h4>
                                @can('user-trash')
                                    <a href="{{ route('admin.users.trash') }}" class="btn btn-danger mb-2 mr-2"
                                        style="float:left;margin-top:-37px;"><i class="fa fa-trash"></i> سطل زباله
                                        <span class="badge badge-danger">
                                            {{ \App\Models\User::onlyTrashed()->count() }}
                                        </span></a>
                                @endcan

                                <a href="{{ route('admin.users.create') }}" class="btn btn-success mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-plus-square"></i> افزودن</a>

                                {{-- <button type="button" class="btn btn-primary mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-file-excel-o"></i> خروجی
                                    اکسل</button> --}}
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
                                            <th>وضعیت کاربر</th>
                                            <th>تاریخ ایجاد</th>
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
                                                        @can('user-edit')
                                                            @if ($user->isActive == 1)
                                                                <a wire:click="changeStatus({{ $user->id }})"
                                                                    style="cursor:pointer"><span
                                                                        class="badge badge-success">فعال</span></a>
                                                            @else
                                                                <a wire:click="changeStatus({{ $user->id }})"
                                                                    style="cursor:pointer"><span
                                                                        class="badge badge-danger">غیرفعال</span></a>
                                                            @endif
                                                            @if ($user->mobile_verified_at != null)
                                                                <a wire:click="changeStatusMobile({{ $user->id }})"
                                                                    style="cursor:pointer"><span
                                                                        class="badge badge-success">تائید موبایل</span></a>
                                                            @else
                                                                <a wire:click="changeStatusMobile({{ $user->id }})"
                                                                    style="cursor:pointer"><span
                                                                        class="badge badge-danger">تائید موبایل</span></a>
                                                            @endif
                                                            @if ($user->email_verified_at != null)
                                                                <a wire:click="changeStatusEmail({{ $user->id }})"
                                                                    style="cursor:pointer"><span
                                                                        class="badge badge-success">تائید ایمیل</span></a>
                                                            @else
                                                                <a wire:click="changeStatusEmail({{ $user->id }})"
                                                                    style="cursor:pointer"><span
                                                                        class="badge badge-danger">تائید ایمیل</span></a>
                                                            @endif
                                                        @endcan
                                                        @cannot('user-edit')
                                                            @if ($user->isActive == 1)
                                                                <span style="cursor:pointer"><span
                                                                        class="badge badge-success">فعال</span></span>
                                                            @else
                                                                <span style="cursor:pointer"><span
                                                                        class="badge badge-danger">غیرفعال</span></span>
                                                            @endif
                                                        @endcannot

                                                    </td>
                                                    <td>{{ $user->created_at }}</td>
                                                    <td>
                                                        @can('user-info')
                                                            <a href="{{ route('admin.users.info', $user->id) }}"
                                                                class="action-icon" style="font-size:20px;"
                                                                title="نمایش اطلاعات کاربر"><i
                                                                    class="fa fa-eye"></i></a>
                                                        @endcan
                                                        @can('user-login')
                                                            <button wire:click="loginForce({{ $user->id }})"
                                                                class="action-icon" style="font-size:20px;"
                                                                title="ورود به پنل کاربر"><i
                                                                    class="fa fa-sign-in"></i></button>
                                                        @endcan
                                                        @can('user-permission')
                                                            <a href="{{ route('admin.users.permission', $user->id) }}"
                                                                style="font-size:20px;" class="action-icon"
                                                                title="سطح دسترسی کاربر"><i
                                                                    class="fa fa-user-secret"></i></a>
                                                        @endcan
                                                        @can('user-basket')
                                                            <a href="" style="font-size:20px;" title="خرید های کاربر"><i
                                                                    class="fa fa-shopping-basket"
                                                                    style="color:rgb(115, 194, 108);"></i></a>
                                                        @endcan
                                                        @can('user-edit')
                                                            <a href="{{ route('admin.users.edit',$user) }}" style="font-size:20px;" class="action-icon"><i
                                                                    class="fa fa-edit"></i></a>
                                                        @endcan
                                                        @can('user-delete')
                                                            <button wire:click="deleteId({{ $user->id }})"
                                                                style="font-size:20px;" data-toggle="modal"
                                                                data-target="#exampleModal" class="action-icon"><i
                                                                    class="fa fa-trash"></i></button>
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
