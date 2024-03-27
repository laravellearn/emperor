@section('title', 'تسویه حساب ها')

<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">


                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">درخواست های تسویه حساب</h4>

                                <hr>
                                <input wire:model="search" type="search" class="form-control mb-2 w-50 float-left"
                                    placeholder="جستجو...">

                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                    style="width:102%" wire:init='loadPayment'>
                                    <thead>
                                        <tr>
                                            <th>فروشنده</th>
                                            <th>موبایل</th>
                                            <th>مبلغ درخواستی</th>
                                            <th>وضعیت</th>
                                            <th>تاریخ درخواست</th>
                                        </tr>
                                    </thead>

                                    @if ($readyToLoad)
                                        <tbody>
                                            @foreach ($payments as $payment)
                                                <tr>
                                                    <td>{{ $payment->user->name }}</td>
                                                    <td>{{ $payment->user->mobile }}</td>
                                                    <td>{{ number_format($payment->price) }}</td>
                                                    <td>
                                                        @if ($payment->status == "unpaid")
                                                            <a wire:click="changeStatus({{ $payment->id }})"
                                                                style="cursor:pointer"><span
                                                                    class="badge badge-danger">تسویه نشده</span></a>
                                                        @else
                                                            <a wire:click="changeStatus({{ $payment->id }})"
                                                                style="cursor:pointer"><span
                                                                    class="badge badge-success">تسویه شده</span></a>
                                                        @endif
                                                    </td>
                                                    <td>{{ $payment->created_at }}</td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                        {{ $payments->links() }}
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
