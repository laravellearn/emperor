@section('styles')
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/default-assets/select.bootstrap4.css') }}">

@endsection
@section('title', 'ایجاد محصول')
<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">ایجاد محصول</h4>
                                <a href="{{ route('admin.products') }}" class="btn btn-success mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-list"></i> لیست
                                    محصولات</a>
                                <hr>
                                <form role="form" wire:submit.prevent='ProductForm'>
                                    @include('errors.error')

                                    <div class="row">
                                        <div class="col-6">
                                            <label for="">عنوان محصول:</label>
                                            <input class="form-control" wire:model="product.title" type="text">
                                        </div>
                                        <div class="col-6">
                                            <label for="">لینک محصول:</label>
                                            <input class="form-control" wire:model="product.slug" type="text">
                                        </div>
                                        <div class="col-4 mt-30">
                                            <div class="form-group">
                                                <label for="">برچسب ها:</label>
                                                <div wire:ignore>
                                                    <select class="form-control" multiple="multiple"
                                                        wire:model.lazy="tags" id="tags"
                                                        style="width: 100%;">
                                                        @foreach (\App\Models\Admin\Products\Tag::all() as $tag)
                                                            <option value="{{ $tag->id }}">
                                                                {{ $tag->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-4 mt-30">
                                            <div class="form-group">
                                                <label for="">گارانتی:</label>
                                                <div wire:ignore>
                                                    <select class="form-control" wire:model.lazy="garanty_id"
                                                        id="garanty_id" style="width: 100%;">
                                                        <option value="">--انتخاب گارانتی--</option>
                                                        @foreach (\App\Models\Admin\Products\Garanty::all() as $garanty)
                                                            <option value="{{ $garanty->id }}">
                                                                {{ $garanty->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 mt-30">
                                            <div class="form-group">
                                                <label for="">رنگ ها:</label>
                                                <div wire:ignore>
                                                    <select class="form-control" multiple="multiple"
                                                        wire:model.lazy="colors" id="colors"
                                                        style="width: 100%;">
                                                        @foreach (\App\Models\Admin\Products\Color::all() as $color)
                                                            <option value="{{ $color->id }}" style="color:{{ $color->value }} !important">
                                                                {{ $color->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="col-3 mt-30">
                                            <div class="form-group">
                                                <label for="exampleInputEmail12">دسته بندی سطح 1:</label>
                                                <div wire:ignore>
                                                    <select class="form-control" wire:model.lazy="level1_id"
                                                        id="level1_id" style="width: 100%;">
                                                        <option value="">--انتخاب دسته بندی سطح 1--</option>
                                                        @foreach (\App\Models\Admin\Products\Category::where('level', 1)->where('isActive', 1)->get() as $category)
                                                            <option value="{{ $category->id }}">
                                                                {{ $category->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-3 mt-30">
                                            <div class="form-group">
                                                <label for="exampleInputEmail12">دسته بندی سطح 2:</label>
                                                <div wire:ignore>
                                                    <select class="form-control" wire:model.lazy="level2_id"
                                                        id="level2_id" style="width: 100%;">
                                                        <option value="">--انتخاب دسته بندی سطح 2--</option>
                                                        @foreach (\App\Models\Admin\Products\Category::where('level', 2)->where('isActive', 1)->get() as $category)
                                                            <option value="{{ $category->id }}">
                                                                {{ $category->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-3 mt-30">
                                            <div class="form-group">
                                                <label for="exampleInputEmail12">دسته بندی سطح 3:</label>
                                                <div wire:ignore>
                                                    <select class="form-control" wire:model.lazy="level3_id"
                                                        id="level3_id" style="width: 100%;">
                                                        <option value="">--انتخاب دسته بندی سطح 3--</option>
                                                        @foreach (\App\Models\Admin\Products\Category::where('level', 3)->where('isActive', 1)->get() as $category)
                                                            <option value="{{ $category->id }}">
                                                                {{ $category->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-3 mt-30">
                                            <div class="form-group">
                                                <label for="exampleInputEmail12">برند محصول:</label>
                                                <div wire:ignore>
                                                    <select class="form-control" wire:model.lazy="brand_id"
                                                        id="brand_id" style="width: 100%;">
                                                        <option value="">--انتخاب برند محصول--</option>
                                                        @foreach (\App\Models\Admin\Products\Brand::where('isActive', 1)->get() as $brand)
                                                            <option value="{{ $brand->id }}">
                                                                {{ $brand->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-30">
                                        <label for="">توضیحات کوتاه:</label>
                                        <textarea wire:model="product.description" class="form-control" cols="30" rows="5"></textarea>
                                    </div>
                                    <div class="row mt-30">
                                        <label for="">توضیحات کامل:</label>
                                        <textarea wire:model="product.body" id="body" class="form-control" cols="30" rows="5"></textarea>
                                    </div>
                                    <div class="row mt-30">
                                        <div class="col-3">
                                            <label for="">قیمت محصول:</label>
                                            <input class="form-control" wire:model="product.price" type="text">
                                        </div>
                                        <div class="col-3">
                                            <label for="">قیمت با تخفیف:</label>
                                            <input class="form-control" wire:model="product.discountPrice"
                                                type="text">
                                        </div>
                                        <div class="col-3">
                                            <label for="">موجودی انبار:</label>
                                            <input class="form-control" wire:model="product.number" type="text">
                                        </div>
                                        <div class="col-3">
                                            <label for="">وزن محصول:</label>
                                            <input class="form-control" wire:model="product.weight" type="text">
                                        </div>
                                        <div class="col-3">
                                            <label for="">حداکثر سفارش:</label>
                                            <input class="form-control" wire:model="product.orderMax" type="text">
                                        </div>
                                        <div class="col-3">
                                            <label for="">حداقل سفارش:</label>
                                            <input class="form-control" wire:model="product.orderMin" type="text">
                                        </div>


                                        <div class="col-3 mt-30">
                                            <div class="input-group cust-file-button mb-3">
                                                <div class="custom-file">
                                                    <input type="file" wire:model.lazy="image"
                                                        class="custom-file-input form-control" id="inputGroupFile03">
                                                    <label class="custom-file-label" for="inputGroupFile03">تصویر
                                                        محصول</label>
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
                                                <img class="form-control mt-3 mb-3"
                                                    src="{{ $image->temporaryUrl() }}" alt="">
                                            @endif

                                        </div>
                                        <div class="col-1 mt-30">
                                            <div class="checkbox checkbox-primary d-inline">
                                                <input type="checkbox" wire:model="isActive" id="checkbox-p-1">
                                                <label for="checkbox-p-1" class="cr">فعال</label>
                                            </div>

                                        </div>
                                        <div class="col-2 mt-30">
                                            <div class="checkbox checkbox-primary d-inline">
                                                <input type="checkbox" wire:model="special" id="checkbox-p-2">
                                                <label for="checkbox-p-2" class="cr">محصول ویژه</label>
                                            </div>

                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-outline-success mt-3 mb-2 mr-2"
                                        style="float:left;"><i class="fa fa-save"></i> ذخیره</button>

                                </form>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->

            </div>
        </div>
    </div>

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
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

<script>
    $(document).ready(function() {
        $('#tags').select2();
        $('#tags').on('change', function(e) {
            let data = $(this).val();
            @this.set('tags', data);
        });
        window.livewire.on('tagStore', () => {
            $('#tags').select2();
        });
    });

    $(document).ready(function() {
        $('#colors').select2();
        $('#colors').on('change', function(e) {
            let data = $(this).val();
            @this.set('colors', data);
        });
        window.livewire.on('colorStore', () => {
            $('#colors').select2();
        });
    });

    $(document).ready(function() {
        ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );
    });
</script>
@endsection
