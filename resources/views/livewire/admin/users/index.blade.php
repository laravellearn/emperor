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
                                <button type="button" class="btn btn-danger mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-refresh"></i> سطل
                                    زباله</button>
                                <button type="button" class="btn btn-success mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-plus-square"></i>
                                    افزودن</button>
                                <button type="button" class="btn btn-primary mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-file-excel-o"></i> خروجی
                                    اکسل</button>
                                <hr>

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
                                                    <a href="" style="font-size:20px;" title="اطلاعات کاربر"><i
                                                            class="fa fa-eye" style="color:#234124;"></i></a>
                                                    <a href="" style="font-size:20px;" title="ورود به پنل کاربر"><i
                                                            class="fa fa-sign-in" style="color:green;"></i></a>
                                                    <a href="" style="font-size:20px;" title="سطح دسترسی کاربر"><i
                                                            class="fa fa-user-secret" style="color:darkblue;"></i></a>
                                                    <a href="" style="font-size:20px;" title="خرید های کاربر"><i
                                                            class="fa fa-shopping-basket"
                                                            style="color:rgb(115, 194, 108);"></i></a>
                                                    <a href="" style="font-size:20px;"><i class="fa fa-edit"
                                                            style="color:#04a9f5;"></i></a>
                                                    <a href="" style="font-size:20px;"><i class="fa fa-trash"
                                                            style="color:#dc3545;"></i></a>
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

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->

            </div>
        </div>
    </div>
</div>
