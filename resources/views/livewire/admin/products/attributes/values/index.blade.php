@section('title', 'مقدار ویژگی محصولات')

<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    @can('product-attributes-create')
                        <div class="col-xl-4 box-margin height-card">
                            <div class="card card-body">

                                <h4 class="card-title">افزودن مقدار ویژگی محصولات</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <form wire:submit.prevent='ValueForm'>
                                            @include('errors.error')
                                            <div class="form-group">
                                                <label for="exampleInputEmail111">مقدار:</label>
                                                <input type="text" wire:model.lazy='value.value' class="form-control"
                                                    id="exampleInputEmail111">
                                            </div>

                                            <button type="submit" class="btn btn-outline-success mb-2 mr-2"
                                                style="float:left;"><i class="fa fa-save"></i> ذخیره</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endcan

                    @cannot('product-attributes-create')
                        <div class="col-lg-12 box-margin">
                        @endcannot
                        @can('product-attributes-create')
                            <div class="col-12 col-lg-8 box-margin">
                            @endcan
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-2">لیست مقدار ویژگی محصولات</h4>
                                    <hr>
                                    <input wire:model="search" type="search" class="form-control mb-2 w-50 float-left"
                                        placeholder="جستجو...">

                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                        style="width:102%" wire:init='loadValue'>
                                        <thead>
                                            <tr>
                                                <th>مقدار</th>
                                                <th>عملیات</th>
                                            </tr>
                                        </thead>

                                        @if ($readyToLoad)
                                            <tbody>
                                                @foreach ($values as $value)
                                                    <tr>
                                                        <td>{{ $value->value }}</td>
                                                        <td>
                                                            @can('product-attributes-edit')
                                                                <a href="{{ route('admin.product.attributes.edit', $value->id) }}"
                                                                    class="action-icon"> <i
                                                                        class="zmdi zmdi-edit zmdi-custom"></i></a>
                                                            @endcan
                                                            @can('product-attributes-delete')
                                                                <button wire:click="deleteId({{ $value->id }})"
                                                                    data-toggle="modal" data-target="#exampleModal"
                                                                    class="action-icon"> <i
                                                                        class="zmdi zmdi-delete zmdi-custom"></i></button>
                                                            @endcan
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            {{ $values->links() }}
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
