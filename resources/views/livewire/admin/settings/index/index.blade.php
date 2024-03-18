@section('title', 'تنظیمات صفحه اصلی')
<div>
    <div class="data-table-area">
        <div class="container-fluid" wire:init='loadSlider'>
            <div class="inbox-area">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="d-sm-flex">
                                    <div class="mail-side-menu mb-30">
                                        <div class="ibox-content mailbox-content">
                                            <div class="file-manager clearfix">
                                                <!-- Title -->
                                                <ul class="folder-list">
                                                    @can('setting-footer-label')
                                                        <li><a href="{{ route('admin.settings.sliders') }}"> اسلایدر ها
                                                            </a></li>
                                                    @endcan
                                                    {{-- @can('settings-footer-social')
                                                        <li><a href="{{ route('admin.settings.footer.social') }}"> شبکه
                                                                های
                                                                اجتماعی </a></li>
                                                    @endcan
                                                    @can('settings-footer-logo')
                                                        <li class="active"><a
                                                                href="{{ route('admin.settings.footer.logo') }}"> لوگوهای
                                                                فوتر
                                                            </a></li>
                                                    @endcan
                                                    @can('settings-footer-menu')
                                                        <li><a href="{{ route('admin.settings.footer.menu') }}"> منوهای
                                                                فوتر </a></li>
                                                    @endcan
                                                    @can('settings-footer-namad')
                                                        <li><a href="{{ route('admin.settings.footer.namad') }}"> نمادهای
                                                                سایت
                                                            </a></li>
                                                    @endcan --}}

                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mail-body--area">
                                        <div class="container-fluid">
                                            <div class="row">
                                                @can('setting-index')
                                                    <div class="col-xl-4 box-margin height-card">
                                                        <div class=" card-body">
                                                            <h4 class="card-title mb-2">افزودن اسلایدر</h4>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-xs-12">
                                                                    <form role="form" wire:submit.prevent='SliderForm'>
                                                                        @include('errors.error')
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail111">عنوان
                                                                                اسلایدر:</label>
                                                                            <input type="text" wire:model="slider.alt"
                                                                                class="form-control"
                                                                                id="exampleInputEmail111">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail111">لینک:</label>
                                                                            <input type="text" wire:model="slider.link"
                                                                                class="form-control"
                                                                                id="exampleInputEmail111">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail12">جایگاه
                                                                                اسلایدر:</label>
                                                                            <select class="form-control"
                                                                                wire:model="slider.position"
                                                                                style="width: 100%;">
                                                                                <option value="">-- هیچکدام --
                                                                                </option>
                                                                                <option value="bannerTop">بنر بالای سایت
                                                                                </option>
                                                                                <option value="sliderMain">اسلایدر اصلی
                                                                                </option>
                                                                                <option value="bannerLeftTop">بنر سمت چپ
                                                                                    اسلایدر</option>
                                                                                <option value="banner4">بنر های 4 تایی
                                                                                </option>
                                                                                <option value="banner2">بنر های 2 تایی
                                                                                </option>
                                                                            </select>
                                                                        </div>

                                                                        <div class="input-group cust-file-button mb-3">
                                                                            <div class="custom-file">
                                                                                <input type="file" wire:model="image"
                                                                                    class="custom-file-input form-control"
                                                                                    id="inputGroupFile03">
                                                                                <label class="custom-file-label"
                                                                                    for="inputGroupFile03">تصویر
                                                                                    اسلایدر</label>
                                                                                <span class="text-info" wire:target='image'
                                                                                    wire:loading>درحال
                                                                                    بارگزاری...</span>
                                                                            </div>
                                                                        </div>

                                                                        <div wire:ignore id="progressbar"
                                                                            class="progress mb-0 mt-1 mb-1"
                                                                            style="display: none">
                                                                            <div class="progress-bar" role="progressbar"
                                                                                style="width: 0%;" aria-valuenow="0"
                                                                                aria-valuemin="0" aria-valuemax="100">0٪
                                                                            </div>
                                                                        </div>

                                                                        @if ($image)
                                                                            <img class="form-control mt-3 mb-3"
                                                                                src="{{ $image->temporaryUrl() }}"
                                                                                alt="">
                                                                        @endif

                                                                        <button type="submit"
                                                                            class="btn btn-outline-success mt-3 mb-2 mr-2"
                                                                            style="float:left;"><i class="fa fa-save"></i>
                                                                            ذخیره</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                @endcan


                                                <div class="col-12 col-lg-8 box-margin">
                                                    <div class="">
                                                        <div class="card-body">
                                                            <h4 class="card-title mb-2">لیست اسلایدرها</h4>
                                                            {{-- <a href="{{ route('admin.settings.footer.logo.trash') }}"
                                                                        class="btn btn-danger mb-2 mr-2"
                                                                        style="float:left;margin-top:-37px;"><i
                                                                            class="fa fa-trash"></i> سطل زباله
                                                                        <span class="badge badge-danger">
                                                                            {{ \App\Models\Admin\Settings\Footerlogo::onlyTrashed()->count() }}
                                                                        </span></a> --}}
                                                            <hr>
                                                            <input wire:model="search" type="search"
                                                                class="form-control mb-2 w-50 float-left"
                                                                placeholder="جستجو...">

                                                            <table id="datatable-buttons"
                                                                class="table table-striped dt-responsive nowrap"
                                                                style="width:104%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>تصویر</th>
                                                                        <th>عنوان اسلایدر</th>
                                                                        <th>جایگاه</th>
                                                                        <th>عملیات</th>
                                                                    </tr>
                                                                </thead>

                                                                @if ($readyToLoad)
                                                                    <tbody>
                                                                        @foreach ($sliders as $slider)
                                                                            <tr>
                                                                                <td>
                                                                                    <img src="{{ $slider->image }}"
                                                                                        width="50px">
                                                                                </td>
                                                                                <td><a href="{{ $slider->link }}"
                                                                                        target="_blank">{{ $slider->alt }}</a>
                                                                                </td>
                                                                                <td>
                                                                                    {{ $slider->position == 'bannerTop' ? 'بنر بالای سایت' : '' }}
                                                                                    {{ $slider->position == 'sliderMain' ? 'اسلایدر اصلی سایت' : '' }}
                                                                                    {{ $slider->position == 'bannerLeftTop' ? 'بنر سمت چپ اسلایدر' : '' }}
                                                                                    {{ $slider->position == 'banner4' ? 'بنر 4 تایی' : '' }}
                                                                                    {{ $slider->position == 'banner2' ? 'بنر 2 تایی' : '' }}
                                                                                </td>
                                                                                {{-- <td> --}}
                                                                                    {{-- @can('settings-footer-logo-edit')
                                                                                            @if ($logo->isActive == 1)
                                                                                                <a wire:click="changeStatus({{ $logo->id }})"
                                                                                                    style="cursor:pointer"><span
                                                                                                        class="badge badge-success">فعال</span></a>
                                                                                            @else
                                                                                                <a wire:click="changeStatus({{ $logo->id }})"
                                                                                                    style="cursor:pointer"><span
                                                                                                        class="badge badge-danger">غیرفعال</span></a>
                                                                                            @endif
                                                                                        @endcan
                                                                                        @cannot('settings-footer-logo-edit')
                                                                                            @if ($logo->isActive == 1)
                                                                                                <span
                                                                                                    style="cursor:pointer"><span
                                                                                                        class="badge badge-success">فعال</span></span>
                                                                                            @else
                                                                                                <span
                                                                                                    style="cursor:pointer"><span
                                                                                                        class="badge badge-danger">غیرفعال</span></span>
                                                                                            @endif
                                                                                        @endcannot --}}
                                                                                {{-- </td> --}}
                                                                                <td>
                                                                                    {{-- @can('settings-footer-logo-edit')
                                                                                            <a href="{{ route('admin.settings.footer.logo.update', $logo->id) }}"
                                                                                                class="action-icon">
                                                                                                <i
                                                                                                    class="zmdi zmdi-edit zmdi-custom"></i></a>
                                                                                        @endcan --}}
                                                                                    <button
                                                                                        wire:click="deleteId({{ $slider->id }})"
                                                                                        data-toggle="modal"
                                                                                        data-target="#exampleModal"
                                                                                        class="action-icon"> <i
                                                                                            class="zmdi zmdi-delete zmdi-custom"></i></button>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                    {{ $sliders->links() }}
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('livewire.admin.include.modal')
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
