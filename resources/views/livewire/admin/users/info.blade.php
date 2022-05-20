@section('title', 'کاربران')
<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">نمایش اطلاعات کاربر: {{ $user->name }}</h4>
                                <a href="{{ route('admin.users') }}" class="btn btn-success mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-list"></i> لیست
                                    کاربران</a>
                                <hr>

                                <div class="row">
                                    <div class="col-3">
                                        <b>نام و نام خانوادگی:</b> {{ $user->name }}
                                    </div>
                                    <div class="col-3">
                                        <b> موبایل:</b> <a href="tel:{{ $user->mobile }}">{{ $user->mobile }}</a>
                                    </div>
                                    <div class="col-3">
                                        <b>پست الکترونیکی:</b> <a
                                            href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                    </div>
                                    <div class="col-3">
                                        <b>وضعیت کاربر:</b>
                                        @if ($user->isActive == 1)
                                            کاربر فعال
                                        @else
                                            کاربر غیرفعال
                                        @endif
                                        -
                                        @if ($user->mobile_verified_at != null)
                                            موبایل تائید شد
                                        @else
                                            موبایل تائید نشد
                                        @endif
                                        -
                                        @if ($user->email_verified_at != null)
                                            ایمیل تائید شد
                                        @else
                                            ایمیل تائید نشد
                                        @endif
                                    </div>
                                </div>

                                <div class="row mt-15">
                                    <div class="col-3">
                                        <b> تاریخ ایجاد کاربر:</b> {{ $user->created_at }}
                                    </div>
                                    <div class="col-3">
                                        <b>تاریخ ویرایش کاربر:</b> {{ $user->updated_at }}
                                    </div>
                                    <div class="col-3">
                                        <b>نوع کاربر:</b>
                                        @if ($user->typeUser == 'admin')
                                            مدیر
                                        @endif
                                        @if ($user->typeUser == 'vendor')
                                            فروشنده
                                        @endif
                                        @if ($user->typeUser == 'user')
                                            کاربر عادی
                                        @endif
                                    </div>
                                    <div class="col-3">
                                        <b>نقش های کاربر:</b>
                                        @foreach ($user->roles as $role)
                                            {{ $role->description }} -
                                        @endforeach
                                    </div>
                                </div>
                                <div class="row mt-15">
                                    <div class="col-6">
                                        <b>سطح دسترسی های کاربر:</b>
                                        @foreach ($user->permissions as $permission)
                                            {{ $permission->description }} -
                                        @endforeach
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
</div>
