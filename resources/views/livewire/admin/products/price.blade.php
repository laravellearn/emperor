@section('title', 'تنوع محصولات')

<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">


                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">لیست محصولات فروشندگان</h4>

                                <hr>
                                <input wire:model="search" type="search" class="form-control mb-2 w-50 float-left"
                                    placeholder="جستجو...">

                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                    style="width:102%" wire:init='loadPrice'>
                                    <thead>
                                        <tr>
                                            <th>فروشنده</th>
                                            <th>موبایل</th>
                                            <th>نام محصول</th>
                                            <th>نوع گارانتی</th>
                                            <th>تعداد موجودی</th>
                                            <th>مبلغ</th>
                                            <th>وضعیت</th>
                                            <th>تاریخ ایجاد</th>
                                        </tr>
                                    </thead>

                                    @if ($readyToLoad)
                                        <tbody>
                                            @foreach ($prices as $price)
                                                <tr>
                                                    <td>{{ $price->user->name }}</td>
                                                    <td>{{ $price->user->mobile }}</td>
                                                    <td>{{ $price->product->title }}</td>
                                                    <td>{{ $price->garanty->title }}</td>
                                                    <td>{{ $price->number }}</td>
                                                    <td>{{ number_format($price->price) }}</td>
                                                    <td>
                                                        @if ($price->isActive == 1)
                                                            <a wire:click="changeStatus({{ $price->id }})"
                                                                style="cursor:pointer"><span
                                                                    class="badge badge-success">فعال</span></a>
                                                        @else
                                                            <a wire:click="changeStatus({{ $price->id }})"
                                                                style="cursor:pointer"><span
                                                                    class="badge badge-danger">غیرفعال</span></a>
                                                        @endif
                                                    </td>
                                                    <td>{{ $price->created_at }}</td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                        {{ $prices->links() }}
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
