@section('title', 'گالری تصاویر محصول')
@section('styles')
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/default-assets/select.bootstrap4.css') }}">

@endsection
<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    @can('product-brands-create')

                        <div class="col-xl-4 box-margin height-card">
                            <div class="card card-body">

                                <h4 class="card-title">افزودن تصویر برای محصولات</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <form role="form" wire:submit.prevent='ImageForm'>
                                            @include('errors.error')
                                            <div class="form-group">
                                                <label for="exampleInputEmail12">انتخاب محصول:</label>
                                                <div wire:ignore>
                                                    <select class="form-control"
                                                        wire:model.lazy="product" id="product" style="width: 100%;">
                                                        <option value="">--هیچکدام--</option>
                                                        @foreach (\App\Models\Admin\Products\Product::all() as $product)
                                                            <option value="{{ $product->id }}">
                                                                {{ $product->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="input-group cust-file-button mb-3">
                                                <div class="custom-file">
                                                    <input type="file" wire:model.lazy="picture"
                                                        class="custom-file-input form-control" id="inputGroupFile03">
                                                    <label class="custom-file-label" for="inputGroupFile03">تصویر
                                                        محصول</label>
                                                    <span class="text-info" wire:target='picture' wire:loading>درحال
                                                        بارگزاری...</span>
                                                </div>
                                            </div>
                                            <div wire:ignore id="progressbar" class="progress mb-0 mt-1 mb-1"
                                                style="display: none">
                                                <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0٪
                                                </div>
                                            </div>

                                            @if ($picture)
                                                <img class="form-control mt-3 mb-3"
                                                    src="{{ $picture->temporaryUrl() }}" alt="">
                                            @endif


                                            <button type="submit" class="btn btn-outline-success mb-2 mr-2"
                                                style="float:left;"><i class="fa fa-save"></i> ذخیره</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endcan

                    @cannot('product-brands-create')
                        <div class="col-lg-12 box-margin">
                        @endcannot
                        @can('product-brands-create')
                            <div class="col-12 col-lg-8 box-margin">
                            @endcan
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-2">لیست برند محصولات</h4>
                                    @can('product-brands-trash')
                                        <a href="{{ route('admin.product.brands.trash') }}" type="button"
                                            class="btn btn-danger mb-2 mr-2" style="float:left;margin-top:-37px;"><i
                                                class="fa fa-trash"></i> سطل زباله <span class="badge badge-danger">
                                                {{ \App\Models\Admin\products\Brand::onlyTrashed()->count() }}
                                            </span></a>
                                    @endcan
                                    {{-- <button type="button" class="btn btn-primary mb-2 mr-2"
                                        style="float:left;margin-top:-37px;"><i class="fa fa-file-excel-o"></i> خروجی
                                        اکسل</button> --}}
                                    <hr>
                                    <input wire:model="search" type="search" class="form-control mb-2 w-50 float-left"
                                        placeholder="جستجو...">

                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                        style="width:102%" wire:init='loadImage'>
                                        <thead>
                                            <tr>
                                                <th>تصویر محصول</th>
                                                <th>عنوان محصول</th>
                                                <th>عملیات</th>
                                            </tr>
                                        </thead>

                                        @if ($readyToLoad)
                                            <tbody>
                                                @foreach ($images as $image)
                                                    <tr>
                                                        <td><img src="{{ $image->image }}" width="50px" alt=""></td>
                                                        <td>{{ $image->product->title }}</td>

                                                        <td>

                                                            @can('product-galleries-delete')
                                                                <button wire:click="deleteId({{ $image->id }})"
                                                                    data-toggle="modal" data-target="#exampleModal"
                                                                    class="action-icon"> <i
                                                                        class="zmdi zmdi-delete zmdi-custom"></i></button>
                                                            @endcan
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            {{ $images->links() }}
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

        <script>
            document.addEventListener('livewire:load', () => {
                let progressSection = document.querySelector('#progressbar'),
                    progressBar = progressSection.querySelector('.progress-bar');

                document.addEventListener('livewire-upload-start', () => {
                    console.log('شروع بارگزاری');
                    progressSection.style.display = 'flex';
                });

                document.addEventListener('livewire-upload-finish', () => {
                    console.log('اتمام بارگزاری');
                    progressSection.style.display = 'none';
                });

                document.addEventListener('livewire-upload-error', () => {
                    console.log('خطا در بارگزاری');
                    progressSection.style.display = 'none';
                });

                document.addEventListener('livewire-upload-progress', (event) => {
                    console.log(`${event.detail.progress}%`);
                    progressBar.style.width = `${event.detail.progress}%`;
                    progressBar.textContent = `${event.detail.progress}%`;
                });
            });
        </script>
    </div>
    @section('scripts')
    <script>
        $(document).ready(function() {
            $('#product').select2();
            $('#product').on('change', function(e) {
                let data = $(this).val();
                @this.set('product', data);
            });
            window.livewire.on('ProductStore', () => {
                $('#product').select2();
            });
        });
    </script>
@endsection
