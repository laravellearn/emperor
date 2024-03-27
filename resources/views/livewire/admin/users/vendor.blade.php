@section('title', 'درخواست فروشندگی')
<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid" wire:init='loadUser'>
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">لیست درخواست های فروشندگی</h4>

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
                                            <th>تاریخ ایجاد</th>
                                        </tr>
                                    </thead>

                                    @if ($readyToLoad)
                                        <tbody>
                                            @foreach ($users as $user)
                                                @if ($user->vendorRequest == 1)
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
                                                            @can('user-edit')
                                                                @if ($user->typeUser == 'user')
                                                                    <a wire:click="changeStatus({{ $user->id }})"
                                                                        style="cursor:pointer"><span
                                                                            class="badge badge-danger">تائید
                                                                            فروشندگی</span></a>
                                                                @endif
                                                            @endcan

                                                        </td>
                                                        <td>{{ $user->created_at }}</td>
                                                    </tr>
                                                @endif
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
