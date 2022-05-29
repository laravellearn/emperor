@section('title', 'دسته بندی های محصولات')
<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    @can('product-categories-create')
                        <div class="col-xl-4 box-margin height-card">
                            <div class="card card-body">
                                <h4 class="card-title">افزودن دسته بندی برای محصولات</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <form wire:submit.prevent='CategoriesProductForm'>
                                            @include('errors.error')

                                            <div class="form-group">
                                                <label for="exampleInputEmail111">عنوان دسته بندی:</label>
                                                <input type="text" wire:model.lazy='' class="form-control"
                                                    id="exampleInputEmail111">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail12">توضیحات دسترسی(فارسی):</label>
                                                <input type="text" wire:model.lazy='iption'
                                                    class="form-control" id="exampleInputEmail111">
                                            </div>
                                            <button type="submit" class="btn btn-outline-success mb-2 mr-2"
                                                style="float:left;"><i class="fa fa-save"></i> ذخیره</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endcan

                    @cannot('product-categories-create')
                        <div class="col-lg-12 box-margin">
                        @endcannot
                        @can('product-categories-create')
                            <div class="col-12 col-lg-8 box-margin">
                            @endcan
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-2">لیست دسته بندی ها</h4>
                                    @can('product-categories-trash')
                                        <a href="{{ route('admin.categories.trash') }}" type="button"
                                            class="btn btn-danger mb-2 mr-2" style="float:left;margin-top:-37px;"><i
                                                class="fa fa-refresh"></i> سطل زباله
                                            <span class="badge badge-danger">
                                                {{ \App\Models\Admin\Product\Category::onlyTrashed()->count() }}
                                            </span>
                                        </a>
                                    @endcan
                                    {{-- <button type="button" class="btn btn-primary mb-2 mr-2"
                                        style="float:left;margin-top:-37px;"><i class="fa fa-file-excel-o"></i> خروجی
                                        اکسل</button> --}}
                                    <hr>
                                    <input wire:model="search" type="search" class="form-control mb-2 w-50 float-left"
                                        placeholder="جستجو...">

                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                        style="width:102%" wire:init='loadRole'>
                                        <thead>
                                            <tr>
                                                <th>عنوان دسته بندی</th>
                                                <th>توضیحات</th>
                                                <th>وضعیت</th>
                                                <th>عملیات</th>
                                            </tr>
                                        </thead>

                                        @if ($readyToLoad)
                                            <tbody>
                                                @foreach ($categories as $category)
                                                    <tr>
                                                        <td>{{ $category->title }}</td>
                                                        <td>{{ $category->description }}</td>
                                                        <td>
                                                            @can('product-categories-edit')
                                                                <a href="{{ route('admin.product.category.edit', $category->id) }}"
                                                                    class="action-icon"> <i
                                                                        class="zmdi zmdi-edit zmdi-custom"></i></a>
                                                            @endcan
                                                            @can('product-categories-delete')
                                                                <button wire:click="deleteId({{ $category->id }})"
                                                                    data-toggle="modal" data-target="#exampleModal"
                                                                    class="action-icon"> <i
                                                                        class="zmdi zmdi-delete zmdi-custom"></i></button>
                                                            @endcan
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            {{ $categories->links() }}
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
