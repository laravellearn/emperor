@section('title', 'سطل زباله رنگ ها')
<div>
    <div class="main-content">
        <div class="data-table-area" wire:init='loadColor'>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="">
                            <div class="card-body">
                                <h4 class="card-title mb-2">لیست رنگ های حذف شده</h4>
                                <a href="{{ route('admin.product.colors') }}" class="btn btn-success mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-list-alt"></i> لیست رنگ ها</a>
                                <hr>
                                <input wire:model="search" type="search" class="form-control mb-2 w-50 float-left"
                                    placeholder="جستجو...">

                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                    style="width:104%">
                                    <thead>
                                        <tr>
                                            <th>عنوان رنگ</th>
                                            <th>مقدار رنگ</th>
                                            <th>تاریخ حذف</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>

                                    @if ($readyToLoad)
                                        <tbody>
                                            @foreach ($colors as $color)
                                                <tr>
                                                    <td>{{ $color->title }}</td>
                                                    <td style="background-color:{{ $color->value }}">{{ $color->value }}</td>
                                                    <td>{{ $color->deleted_at }}</td>
                                                    <td>
                                                        @can('product-colors-restore')
                                                            <button wire:click="restore({{ $color->id }})"
                                                                class="action-icon">
                                                                <i class="zmdi zmdi-replay zmdi-custom"></i></button>
                                                        @endcan
                                                        @can('product-colors-forceDelete')
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
