@section('title', 'مدیریت سفارشات')

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
                                    <h4 class="card-title mb-2">لیست سفارشات</h4>

                                    <hr>
                                    <input wire:model="search" type="search" class="form-control mb-2 w-50 float-left"
                                        placeholder="جستجو...">

                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                        style="width:102%" wire:init='loadOrder'>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>سفارش دهنده</th>
                                                <th>موبایل</th>
                                                <th>وضعیت</th>
                                                <th>وضعیت سفارش</th>
                                                <th>مبلغ کل</th>
                                                <th>تاریخ ایجاد</th>
                                                <th>عملیات</th>
                                            </tr>
                                        </thead>

                                        @if ($readyToLoad)
                                            <tbody>
                                                @foreach ($orders as $order)
                                                    <tr>
                                                        <td>{{ $order->id }}</td>
                                                        <td>{{ $order->user->name }}</td>
                                                        <td>{{ $order->user->mobile }}</td>
                                                        <td>
                                                            @if ($order->cart->status == 'done')
                                                                <label class="badge badge-success">تکمیل شده</label>
                                                            @elseif ($order->cart->status == 'sending')
                                                                <label class="badge badge-danger-lighten">در حال
                                                                    ارسال</label>
                                                            @elseif ($order->cart->status == 'cancelled')
                                                                <label class="badge badge-danger">لغو شده</label>
                                                            @else
                                                                <label class="badge badge-info">در حال انجام</label>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($order->status == 'paid')
                                                                <label class="badge badge-success">پرداخت شده</label>
                                                            @elseif ($order->status == 'unpaid')
                                                                <label class="badge badge-danger-lighten">پرداخت نشده</label>
                                                            @else
                                                                <label class="badge badge-danger">لغو شده</label>
                                                            @endif

                                                        </td>
                                                        <td>{{ number_format($order->price) }}</td>
                                                        <td>{{ $order->created_at }}</td>

                                                        <td>
                                                            @can('orders')
                                                                <a href="{{ route('admin.orders.status.edit',$order) }}" class="action-icon"> <i
                                                                        class="zmdi zmdi-view-list zmdi-custom"></i></a>

                                                                <a href="" class="action-icon"> <i
                                                                        class="zmdi zmdi-edit zmdi-custom"></i></a>
                                                            @endcan
                                                            @can('orders')
                                                                <button wire:click="deleteId({{ $order->id }})"
                                                                    data-toggle="modal" data-target="#exampleModal"
                                                                    class="action-icon"> <i
                                                                        class="zmdi zmdi-delete zmdi-custom"></i></button>
                                                            @endcan
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            {{ $orders->links() }}
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
