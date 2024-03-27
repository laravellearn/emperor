@extends('layouts.admin2')

@section('title', 'مدیریت سفارش')
@section('content')
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">سفارش شماره #{{ $order->id }}</h4>
                                <hr>
                                <form method="post" action="{{ route('admin.orders.status.update', $order->id) }}">
                                    @CSRF
                                    @method('patch')
                                    @include('errors.error')

                                    <div class="row">
                                        <div class="col-3 mt-30">
                                            <div class="form-group">

                                                <label for="">وضعیت سفارش:</label>
                                                <select name="status">
                                                    <option value="paid" {{ $order->status=="paid" ? "selected" : ""}}>پرداخت شده</option>
                                                    <option value="unpaid" {{ $order->status=="unpaid" ? "selected" : ""}}>پرداخت نشده</option>
                                                    <option value="cancelled" {{ $order->status=="cancelled" ? "selected" : ""}}>منصرف شده</option>
                                                </select>

                                            </div>

                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-outline-success mt-3 mb-2 mr-2"
                                        style="float:left;"><i class="fa fa-save"></i> ثبت</button>

                                </form>
                                <label for="">نام کاربر: {{ $order->user->name }}</label><br>
                                <label for="">موبایل کاربر: {{ $order->user->mobile }}</label><br>
                                <label for="">آدرس کاربر: {{ $address->address }}</label>
                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap" style="width:102%"
                                wire:init='loadOrder'>
                                <thead>
                                    <tr>
                                        <th>شماره سفارش</th>
                                        <th>نام محصول</th>
                                        <th>تعداد</th>
                                        <th>مبلغ</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{ $item->order->id }}</td>
                                            <td>{{ $item->product->title }}</td>
                                            <td>{{ $item->number }}</td>
                                            <td>{{ number_format($item->price) }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->

                    </div><!-- end col-->
                </div>
                <!-- end row-->

            </div>
        </div>
    </div>


@endsection
