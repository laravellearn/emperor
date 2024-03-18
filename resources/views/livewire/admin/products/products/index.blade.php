@section('title', 'مدیریت محصولات')

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
                                    <h4 class="card-title mb-2">لیست محصولات</h4>
                                    @can('products-trash')
                                        <a href="{{ route('admin.products.trash') }}" type="button"
                                            class="btn btn-danger mb-2 mr-2" style="float:left;margin-top:-37px;"><i
                                                class="fa fa-trash"></i> سطل زباله <span class="badge badge-danger">
                                                {{ \App\Models\Admin\products\Product::onlyTrashed()->count() }}
                                            </span></a>
                                    @endcan
                                    @can('products-create')
                                        <a href="{{ route('admin.products.create') }}" type="button"
                                            class="btn btn-success mb-2 mr-2" style="float:left;margin-top:-37px;"><i
                                                class="fa fa-plus"></i> افزودن محصول </a>
                                    @endcan

                                    {{-- <button type="button" class="btn btn-primary mb-2 mr-2"
                                        style="float:left;margin-top:-37px;"><i class="fa fa-file-excel-o"></i> خروجی
                                        اکسل</button> --}}
                                    <hr>
                                    <input wire:model="search" type="search" class="form-control mb-2 w-50 float-left"
                                        placeholder="جستجو...">

                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                        style="width:102%" wire:init='loadProduct'>
                                        <thead>
                                            <tr>
                                                <th>نام محصول</th>
                                                <th>مبلغ</th>
                                                <th>مبلغ با تخفیف</th>
                                                <th>مشاهده محصول</th>
                                                <th>محصول ویژه</th>
                                                <th>تاریخ ایجاد</th>
                                                <th>وضعیت</th>
                                                <th>عملیات</th>
                                            </tr>
                                        </thead>

                                        @if ($readyToLoad)
                                            <tbody>
                                                @foreach ($products as $product)
                                                    <tr>
                                                        <td><a href="{{ $product->slug }}">{{ $product->title }}</a>
                                                        </td>
                                                        <td>{{ number_format($product->price) }}</td>
                                                        <td>{{ number_format($product->discountPrice) }}</td>
                                                        <td>{{ $product->viewCount }}</td>

                                                        <td>
                                                            @can('products-edit')
                                                                @if ($product->special == 1)
                                                                    <a wire:click="changeSpecial({{ $product->id }})"
                                                                        style="cursor:pointer"><span
                                                                            class="badge badge-success">بلی</span></a>
                                                                @else
                                                                    <a wire:click="changeSpecial({{ $product->id }})"
                                                                        style="cursor:pointer"><span
                                                                            class="badge badge-danger">خیر</span></a>
                                                                @endif
                                                            @endcan
                                                            @cannot('products-edit')
                                                                @if ($product->special == 1)
                                                                    <span style="cursor:pointer"><span
                                                                            class="badge badge-success">فعال</span></span>
                                                                @else
                                                                    <span style="cursor:pointer"><span
                                                                            class="badge badge-danger">غیرفعال</span></span>
                                                                @endif
                                                            @endcannot

                                                        </td>
                                                        <td>{{ $product->created_at }}</td>
                                                        <td>
                                                            @can('products-edit')
                                                                @if ($product->isActive == 1)
                                                                    <a wire:click="changeStatus({{ $product->id }})"
                                                                        style="cursor:pointer"><span
                                                                            class="badge badge-success">فعال</span></a>
                                                                @else
                                                                    <a wire:click="changeStatus({{ $product->id }})"
                                                                        style="cursor:pointer"><span
                                                                            class="badge badge-danger">غیرفعال</span></a>
                                                                @endif
                                                            @endcan
                                                            @cannot('products-edit')
                                                                @if ($product->isActive == 1)
                                                                    <span style="cursor:pointer"><span
                                                                            class="badge badge-success">فعال</span></span>
                                                                @else
                                                                    <span style="cursor:pointer"><span
                                                                            class="badge badge-danger">غیرفعال</span></span>
                                                                @endif
                                                            @endcannot

                                                        </td>
                                                        <td>
                                                            @can('products-edit')
                                                            <a href="{{ route('admin.product.attributes.create', $product->id) }}"
                                                                class="action-icon"> <i
                                                                    class="zmdi zmdi-view-list zmdi-custom"></i></a>

                                                                <a href="{{ route('admin.products.edit', $product->id) }}"
                                                                    class="action-icon"> <i
                                                                        class="zmdi zmdi-edit zmdi-custom"></i></a>

                                                            @endcan
                                                            @can('products-delete')
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
