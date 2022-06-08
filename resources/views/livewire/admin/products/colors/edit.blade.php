@section('title', 'ویرایش رنگ محصول')
<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4 box-margin height-card">
                        <div class="card card-body">

                            <h4 class="card-title">ویرایش رنگ</h4>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form wire:submit.prevent='ColorForm'>
                                        @include('errors.error')
                                        <div class="form-group">
                                            <label for="exampleInputEmail111">عنوان رنگ:</label>
                                            <input type="text" wire:model.lazy='color.title' class="form-control"
                                                id="exampleInputEmail111">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail111">مقدار رنگ:</label>
                                            <input type="text" wire:model.lazy='color.value' class="form-control"
                                                id="exampleInputEmail111">
                                        </div>
                                        <div class="checkbox checkbox-primary d-inline">
                                            <input type="checkbox" wire:model="color.isActive" id="checkbox-p-1">
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
                                <h4 class="card-title mb-2">لیست رنگ ها</h4>
                                @can('product-colors')
                                    <a href="{{ route('admin.product.colors.trash') }}" type="button"
                                        class="btn btn-danger mb-2 mr-2" style="float:left;margin-top:-37px;"><i
                                            class="fa fa-trash"></i> سطل زباله <span class="badge badge-danger">
                                            {{ \App\Models\Admin\products\Color::onlyTrashed()->count() }}
                                        </span></a>
                                @endcan
                                {{-- <button type="button" class="btn btn-primary mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-file-excel-o"></i> خروجی
                                    اکسل</button> --}}
                                <a href="{{ route('admin.product.colors') }}" class="btn btn-success mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-plus-square"></i> افزودن</a>

                                <hr>
                                <input wire:model="search" type="search" class="form-control mb-2 w-50 float-left"
                                    placeholder="جستجو...">

                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                        style="width:102%" wire:init='loadColor'>
                                        <thead>
                                            <tr>
                                                <th>عنوان رنگ</th>
                                                <th>مقدار رنگ</th>
                                                <th>وضعیت</th>
                                                <th>عملیات</th>
                                            </tr>
                                        </thead>

                                        @if ($readyToLoad)
                                            <tbody>
                                                @foreach ($colors as $color)
                                                    <tr>
                                                        <td>{{ $color->title }}</td>
                                                        <td style="background-color:{{ $color->value }}">{{ $color->value }}</td>
                                                        <td>
                                                            @can('product-colors-edit')
                                                                @if ($color->isActive == 1)
                                                                    <a wire:click="changeStatus({{ $color->id }})"
                                                                        style="cursor:pointer"><span
                                                                            class="badge badge-success">فعال</span></a>
                                                                @else
                                                                    <a wire:click="changeStatus({{ $color->id }})"
                                                                        style="cursor:pointer"><span
                                                                            class="badge badge-danger">غیرفعال</span></a>
                                                                @endif
                                                            @endcan
                                                            @cannot('product-colors-edit')
                                                                @if ($color->isActive == 1)
                                                                    <span style="cursor:pointer"><span
                                                                            class="badge badge-success">فعال</span></span>
                                                                @else
                                                                    <span style="cursor:pointer"><span
                                                                            class="badge badge-danger">غیرفعال</span></span>
                                                                @endif
                                                            @endcannot

                                                        </td>
                                                        <td>
                                                            @can('product-colors-edit')
                                                                    <a href="{{ route('admin.product.colors.edit', $color->id) }}"
                                                                        class="action-icon"> <i
                                                                            class="zmdi zmdi-edit zmdi-custom"></i></a>
                                                            @endcan
                                                            @can('product-colors-delete')
                                                                <button wire:click="deleteId({{ $color->id }})"
                                                                    data-toggle="modal" data-target="#exampleModal"
                                                                    class="action-icon"> <i
                                                                        class="zmdi zmdi-delete zmdi-custom"></i></button>
                                                            @endcan
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            {{ $colors->links() }}
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
