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
                                                <input type="text" wire:model.lazy='category.title' class="form-control"
                                                    id="exampleInputEmail111">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail12">عنوان دسته بندی(لاتین):</label>
                                                <input type="text" wire:model.lazy='category.slug' class="form-control"
                                                    id="exampleInputEmail111" style="text-align:left">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail12">کد آیکون:</label>
                                                <input type="text" wire:model.lazy='category.icon' class="form-control"
                                                    id="exampleInputEmail111">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail12">توضیحات:</label>
                                                <textarea wire:model.lazy='description' class="form-control" id="exampleInputEmail111"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail12">عنوان متا:</label>
                                                <input type="text" wire:model.lazy='category.metaTitle'
                                                    class="form-control" id="meta-title">
                                                <div id="counter1" style="font-size:12px"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail12">توضیحات متا:</label>
                                                <textarea wire:model.lazy='category.metaDescription' class="form-control" id="meta-description"></textarea>
                                                <div id="counter2" style="font-size:12px"></div>
                                            </div>

                                            <div class="input-group cust-file-button mb-3">
                                                <div class="custom-file">
                                                    <input type="file" wire:model="image"
                                                        class="custom-file-input form-control" id="inputGroupFile03">
                                                    <label class="custom-file-label" for="inputGroupFile03">تصویر
                                                        دسته بندی</label>
                                                    <span class="text-info" wire:target='image' wire:loading>درحال
                                                        بارگزاری...</span>
                                                </div>
                                            </div>

                                            <div wire:ignore id="progressbar" class="progress mb-0 mt-1 mb-1"
                                                style="display: none">
                                                <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0٪
                                                </div>
                                            </div>

                                            @if ($image)
                                                <img class="form-control mt-3 mb-3" src="{{ $image->temporaryUrl() }}"
                                                    alt="">
                                            @endif


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
                                        <a href="{{ route('admin.product.categories.trash') }}" type="button"
                                            class="btn btn-danger mb-2 mr-2" style="float:left;margin-top:-37px;"><i
                                                class="fa fa-refresh"></i> سطل زباله
                                            <span class="badge badge-danger">
                                                {{ \App\Models\Admin\products\Category::onlyTrashed()->count() }}
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
                                        style="width:102%" wire:init='loadCategory'>
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

        @section('scripts')
            <script src="{{ asset('/admin/js/MaxLength.min.js') }}"></script>
            <script>
                $(document).ready(function() {

                    //Specifying the Character Count control explicitly
                    $("#meta-title").MaxLength({
                        MaxLength: 60,
                        CharacterCountControl: $('#counter1')
                    });
                    $("#meta-description").MaxLength({
                        MaxLength: 160,
                        CharacterCountControl: $('#counter2')
                    });

                });
            </script>
        @endsection
    </div>
