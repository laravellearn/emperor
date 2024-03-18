@section('title', 'مدیریت سبد خرید ها')

<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">

                    @cannot('products')
                        <div class="col-lg-12 box-margin">
                        @endcannot
                        @can('products')
                            <div class="col-12 box-margin">
                            @endcan
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-2">لیست سبد خرید</h4>

                                    <hr>
                                    <input wire:model="search" type="search" class="form-control mb-2 w-50 float-left"
                                        placeholder="جستجو...">

                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                        style="width:102%" wire:init='loadCart'>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>سفارش دهنده</th>
                                                <th>موبایل</th>
                                                <th>وضعیت سبد خرید</th>
                                                پ <th>مبلغ</th>
                                                <th>تاریخ ایجاد</th>
                                                <th>عملیات</th>
                                            </tr>
                                        </thead>

                                        @if ($readyToLoad)
                                            <tbody>
                                                @foreach ($carts as $cart)
                                                    <tr>
                                                        <td>{{ $cart->id }}</td>
                                                        <td>{{ $cart->user->name }}</td>
                                                        <td>{{ $cart->user->mobile }}</td>
                                                        <td>
                                                            @if ($cart->status == 'done')
                                                                <label class="badge badge-success">تکمیل شده</label>
                                                            @elseif ($cart->status == 'sending')
                                                                <label class="badge badge-danger-lighten">در حال
                                                                    ارسال</label>
                                                            @elseif ($cart->status == 'cancelled')
                                                                <label class="badge badge-danger">لغو شده</label>
                                                            @else
                                                                <label class="badge badge-info">در حال انجام</label>
                                                            @endif
                                                        </td>
                                                        <td>{{ number_format($cart->price) }}</td>
                                                        <td>{{ $cart->created_at }}</td>

                                                        <td>
                                                            @can('carts')
                                                                <a href="" class="action-icon"> <i
                                                                        class="zmdi zmdi-view-list zmdi-custom"></i></a>

                                                                <a href="" class="action-icon"> <i
                                                                        class="zmdi zmdi-edit zmdi-custom"></i></a>
                                                            @endcan
                                                            @can('carts')
                                                                <button wire:click="deleteId({{ $cart->id }})"
                                                                    data-toggle="modal" data-target="#exampleModal"
                                                                    class="action-icon"> <i
                                                                        class="zmdi zmdi-delete zmdi-custom"></i></button>
                                                            @endcan
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            {{ $carts->links() }}
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

    </div>
