@section('title', 'سطل زباله دسته محصولات')
<div>
    <div class="main-content">
        <div class="data-table-area" wire:init='loadCategory'>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="">
                            <div class="card-body">
                                <h4 class="card-title mb-2">لیست دسته ی محصولات حذف شده</h4>
                                <a href="{{ route('admin.product.categories') }}" class="btn btn-success mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-list-alt"></i> لیست دسته بندی
                                    محصولات</a>
                                <hr>
                                <input wire:model="search" type="search" class="form-control mb-2 w-50 float-left"
                                    placeholder="جستجو...">

                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                    style="width:104%">
                                    <thead>
                                        <tr>
                                            <th>نام دسته بندی</th>
                                            <th>دسته مادر</th>
                                            <th>سطح</th>
                                            <th>تاریخ حذف</th>
                                            <th>عملیات</th>

                                        </tr>
                                    </thead>

                                    @if ($readyToLoad)
                                        <tbody>
                                            @foreach ($categories as $category)
                                                <tr>
                                                    <td>{{ $category->title }}</td>
                                                    <td>{{ isset($category->parent->title) ? $category->parent->title : '-' }}
                                                    <td>سطح {{ $category->level }}</td>
                                                    <td>{{ $category->deleted_at }}</td>
                                                    <td>
                                                        @can('product-categories-restore')
                                                            <button wire:click="restore({{ $category->id }})"
                                                                class="action-icon">
                                                                <i class="zmdi zmdi-replay zmdi-custom"></i></button>
                                                        @endcan
                                                        @can('product-categories-forceDelete')
                                                            <button wire:click="deleteId({{ $category->id }})"
                                                                wire:click="deleteId({{ $category->id }})"
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
