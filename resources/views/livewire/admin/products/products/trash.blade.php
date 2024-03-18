@section('title', 'سطل زباله محصولات')
<div>
    <div class="main-content">
        <div class="data-table-area" wire:init='loadProduct'>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="">
                            <div class="card-body">
                                <h4 class="card-title mb-2">لیست محصولات حذف شده</h4>
                                <a href="{{ route('admin.products') }}" class="btn btn-success mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-list-alt"></i> لیست محصولات</a>
                                <hr>
                                <input wire:model="search" type="search" class="form-control mb-2 w-50 float-left"
                                    placeholder="جستجو...">

                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                    style="width:104%">
                                    <thead>
                                        <tr>
                                            <th>نام محصول</th>
                                            <th>مبلغ</th>
                                            <th>تاریخ حذف</th>
                                            <th>عملیات</th>
                                    </tr>
                                    </thead>

                                    @if ($readyToLoad)
                                        <tbody>
                                            @foreach ($products as $product)
                                                <tr>
                                                    <td>{{ $product->title }}</td>
                                                    <td>{{ number_format($product->price) }}</td>

                                                    <td>{{ $product->deleted_at }}</td>
                                                    <td>
                                                        @can('products-restore')
                                                            <button wire:click="restore({{ $product->id }})"
                                                                class="action-icon">
                                                                <i class="zmdi zmdi-replay zmdi-custom"></i></button>
                                                        @endcan
                                                        @can('products-forceDelete')
                                                            <button wire:click="deleteId({{ $product->id }})"
                                                                data-toggle="modal" data-target="#exampleModal"
                                                                class="action-icon"> <i
                                                                    class="zmdi zmdi-delete zmdi-custom"></i></button>
                                                        @endcan
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                        {{ $products->links() }}
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
