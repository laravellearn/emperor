@section('title', 'مدیریت تراکنش های بانکی')

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
                                    <h4 class="card-title mb-2">لیست تراکنش ها</h4>

                                    <hr>
                                    <input wire:model="search" type="search" class="form-control mb-2 w-50 float-left"
                                        placeholder="جستجو...">

                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                        style="width:102%" wire:init='loadTransaction'>
                                        <thead>
                                            <tr>
                                                <th>شماره تراکنش</th>
                                                <th>سفارش دهنده</th>
                                                <th>موبایل</th>
                                                <th>شماره سبدخرید</th>
                                                <th>وضعیت تراکنش</th>
                                                <th>مبلغ کل</th>
                                                <th>تاریخ</th>
                                            </tr>
                                        </thead>

                                        @if ($readyToLoad)
                                            <tbody>
                                                @foreach ($transactions as $transaction)
                                                    <tr>
                                                        <td>{{ $transaction->transaction_id }}</td>
                                                        <td>{{ $transaction->user->name }}</td>
                                                        <td>{{ $transaction->user->mobile }}</td>
                                                        <td>{{ $transaction->cart_id }}</td>
                                                        <td>
                                                            @if ($transaction->status == 2)
                                                                <label class="badge badge-success">موفق</label>
                                                            @elseif ($transaction->status == 1)
                                                                <label class="badge badge-danger">ناموفق
                                                                    </label>
                                                            @elseif ($transaction->status == 0)
                                                                <label class="badge badge-danger-lighten">لغو شده</label>
                                                            @endif
                                                        </td>
                                                        <td>{{ number_format($transaction->paid) }}</td>
                                                        <td>{{ $transaction->created_at }}</td>

                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            {{ $transactions->links() }}
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
