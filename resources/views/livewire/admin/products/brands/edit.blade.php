@section('title', 'ویرایش برند محصول')
<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4 box-margin height-card">
                        <div class="card card-body">

                            <h4 class="card-title">ویرایش برند</h4>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form wire:submit.prevent='BrandForm'>
                                        @include('errors.error')
                                        <div class="form-group">
                                            <label for="exampleInputEmail111">عنوان برند:</label>
                                            <input type="text" wire:model.lazy='brand.title' class="form-control"
                                                id="exampleInputEmail111">
                                        </div>
                                        <div class="checkbox checkbox-primary d-inline">
                                            <input type="checkbox" wire:model="brand.isActive" id="checkbox-p-1">
                                            <label for="checkbox-p-1" class="cr">فعال</label>
                                        </div>

                                        <button type="submit" class="btn btn-outline-success mb-2 mr-2"
                                            style="float:left;"><i class="fa fa-save"></i> ذخیره</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-8 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">لیست برند ها</h4>
                                @can('role-trash')
                                    <a href="{{ route('admin.product.categories.trash') }}" type="button"
                                        class="btn btn-danger mb-2 mr-2" style="float:left;margin-top:-37px;"><i
                                            class="fa fa-trash"></i> سطل زباله <span class="badge badge-danger">
                                            {{ \App\Models\Admin\products\Brand::onlyTrashed()->count() }}
                                        </span></a>
                                @endcan
                                {{-- <button type="button" class="btn btn-primary mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-file-excel-o"></i> خروجی
                                    اکسل</button> --}}
                                <a href="{{ route('admin.product.brands') }}" class="btn btn-success mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-plus-square"></i> افزودن</a>

                                <hr>
                                <input wire:model="search" type="search" class="form-control mb-2 w-50 float-left"
                                    placeholder="جستجو...">

                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                        style="width:102%" wire:init='loadBrand'>
                                        <thead>
                                            <tr>
                                                <th>عنوان برند</th>
                                                <th>وضعیت</th>
                                                <th>عملیات</th>
                                            </tr>
                                        </thead>

                                        @if ($readyToLoad)
                                            <tbody>
                                                @foreach ($brands as $brand)
                                                    <tr>
                                                        <td>{{ $brand->title }}</td>
                                                        <td>
                                                            @can('product-brands-edit')
                                                                @if ($brand->isActive == 1)
                                                                    <a wire:click="changeStatus({{ $brand->id }})"
                                                                        style="cursor:pointer"><span
                                                                            class="badge badge-success">فعال</span></a>
                                                                @else
                                                                    <a wire:click="changeStatus({{ $brand->id }})"
                                                                        style="cursor:pointer"><span
                                                                            class="badge badge-danger">غیرفعال</span></a>
                                                                @endif
                                                            @endcan
                                                            @cannot('product-brands-edit')
                                                                @if ($brand->isActive == 1)
                                                                    <span style="cursor:pointer"><span
                                                                            class="badge badge-success">فعال</span></span>
                                                                @else
                                                                    <span style="cursor:pointer"><span
                                                                            class="badge badge-danger">غیرفعال</span></span>
                                                                @endif
                                                            @endcannot

                                                        </td>
                                                        <td>
                                                            @can('product-brands-edit')
                                                                    <a href="{{ route('admin.product.brands.edit', $brand->id) }}"
                                                                        class="action-icon"> <i
                                                                            class="zmdi zmdi-edit zmdi-custom"></i></a>
                                                            @endcan
                                                            @can('product-brands-delete')
                                                                <button wire:click="deleteId({{ $brand->id }})"
                                                                    data-toggle="modal" data-target="#exampleModal"
                                                                    class="action-icon"> <i
                                                                        class="zmdi zmdi-delete zmdi-custom"></i></button>
                                                            @endcan
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            {{ $brands->links() }}
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
