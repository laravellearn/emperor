@section('title', 'سطل زباله ویژگی ها')
<div>
    <div class="main-content">
        <div class="data-table-area" wire:init='loadAttribute'>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="">
                            <div class="card-body">
                                <h4 class="card-title mb-2">لیست ویژگی های حذف شده</h4>
                                <a href="{{ route('admin.product.attributes') }}" class="btn btn-success mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-list-alt"></i> لیست ویژگی ها</a>
                                <hr>
                                <input wire:model="search" type="search" class="form-control mb-2 w-50 float-left"
                                    placeholder="جستجو...">

                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                    style="width:104%">
                                    <thead>
                                        <tr>
                                            <th>عنوان ویژگی</th>
                                            <th>تاریخ حذف</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>

                                    @if ($readyToLoad)
                                        <tbody>
                                            @foreach ($attributes as $attribute)
                                                <tr>
                                                    <td>{{ $attribute->title }}</td>
                                                    <td>{{ $attribute->deleted_at }}</td>
                                                    <td>
                                                        @can('product-attributes-restore')
                                                            <button wire:click="restore({{ $attribute->id }})"
                                                                class="action-icon">
                                                                <i class="zmdi zmdi-replay zmdi-custom"></i></button>
                                                        @endcan
                                                        @can('product-attributes-forceDelete')
                                                            <button wire:click="deleteId({{ $attribute->id }})"
                                                                wire:click="deleteId({{ $attribute->id }})"
                                                                data-toggle="modal" data-target="#exampleModal"
                                                                class="action-icon"> <i
                                                                    class="zmdi zmdi-delete zmdi-custom"></i></button>
                                                        @endcan
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                        {{ $attributes->links() }}
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
