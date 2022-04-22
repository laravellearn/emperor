@section('title', 'ویرایش لوگوی فوتر')
<div>
    <div class="data-table-area">
        <div class="container-fluid" wire:init='loadLogo'>
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
                                                    <li><a href="{{ route('admin.settings.footer.label') }}"> برچسب ها
                                                        </a></li>
                                                    <li><a href="{{ route('admin.settings.footer.social') }}"> شبکه
                                                            های اجتماعی </a></li>
                                                    <li class="active"><a
                                                            href="{{ route('admin.settings.footer.logo') }}"> لوگوهای
                                                            فوتر </a></li>
                                                            <li><a
                                                                href="{{ route('admin.settings.footer.menu') }}"> منوهای
                                                                فوتر </a></li>

                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mail-body--area">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-xl-4 box-margin height-card">
                                                    <div class=" card-body">
                                                        <h4 class="card-title mb-2">ویرایش لوگوی فوتر</h4>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-12 col-xs-12">
                                                                <form role="form" wire:submit.prevent='LogoForm'>
                                                                    @include('errors.error')
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail111">عنوان
                                                                            لوگو:</label>
                                                                        <input type="text" wire:model="Footerlogo.title"
                                                                            class="form-control"
                                                                            id="exampleInputEmail111">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail111">لینک:</label>
                                                                        <input type="text" wire:model="Footerlogo.url"
                                                                            class="form-control"
                                                                            id="exampleInputEmail111">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail12">جایگاه
                                                                            لوگو:</label>
                                                                        <select class="form-control"
                                                                            wire:model="Footerlogo.type"
                                                                            style="width: 100%;">
                                                                            <option value="">-- هیچکدام --</option>
                                                                            <option value="top">لوگوی بالای فوتر
                                                                            </option>
                                                                            <option value="bottom">لوگوی پایین فوتر
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="input-group cust-file-button mb-3">
                                                                        <div class="custom-file">
                                                                            <input type="file" wire:model.lazy="image"
                                                                                class="custom-file-input form-control"
                                                                                id="inputGroupFile03">
                                                                            <label class="custom-file-label"
                                                                                for="inputGroupFile03">تصویر
                                                                                لوگو</label>
                                                                            <span class="text-info"
                                                                                wire:target='image' wire:loading>درحال
                                                                                بارگزاری...</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="checkbox checkbox-primary d-inline">
                                                                        <input type="checkbox" wire:model="Footerlogo.isActive" id="checkbox-p-1" >
                                                                        <label for="checkbox-p-1" class="cr">فعال</label>
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
                                                                            src="{{ $image->temporaryUrl() }}" alt="">
                                                                    @endif

                                                                    <button type="submit"
                                                                        class="btn btn-outline-success mt-3 mb-2 mr-2"
                                                                        style="float:left;"><i
                                                                            class="fa fa-save"></i> ویرایش</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-12 col-lg-8 box-margin">
                                                    <div class="">
                                                        <div class="card-body">
                                                            <h4 class="card-title mb-2">لیست لوگو های فوتر</h4>
                                                            <a href="{{ route('admin.settings.footer.logo.trash') }}"
                                                             class="btn btn-danger mb-2 mr-2"
                                                                style="float:left;margin-top:-37px;"><i
                                                                    class="fa fa-trash"></i> سطل زباله
                                                                <span class="badge badge-danger">
                                                                    {{ \App\Models\Admin\Settings\Footerlogo::onlyTrashed()->count() }}
                                                                </span></a>

                                                                <a href="{{ route('admin.settings.footer.logo') }}" class="btn btn-success mb-2 mr-2" style="float:left;margin-top:-37px;"><i class="fa fa-plus-square"></i> افزودن</a>
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
                                                                        <th>عنوان لوگو</th>
                                                                        <th>جایگاه</th>
                                                                        <th>وضعیت</th>
                                                                        <th>عملیات</th>
                                                                    </tr>
                                                                </thead>

                                                                @if ($readyToLoad)
                                                                    <tbody>
                                                                        @foreach ($logos as $logo)
                                                                            <tr>
                                                                                <td>
                                                                                    <img src="{{ $logo->image }}"
                                                                                        width="50px">
                                                                                </td>
                                                                                <td><a href="{{ $logo->url }}" target="_blank">{{ $logo->title }}</a></td>
                                                                                <td>{{ $logo->type == 'top' ? 'لوگوی بالای فوتر' : 'لوگوی پایین فوتر' }}
                                                                                </td>
                                                                                <td>
                                                                                    @if ($logo->isActive == 1)
                                                                                        <a wire:click="changeStatus({{ $logo->id }})"
                                                                                            style="cursor:pointer"><span
                                                                                                class="badge badge-success">فعال</span></a>
                                                                                    @else
                                                                                        <a wire:click="changeStatus({{ $logo->id }})"
                                                                                            style="cursor:pointer"><span
                                                                                                class="badge badge-danger">غیرفعال</span></a>
                                                                                    @endif
                                                                                </td>
                                                                                <td>
                                                                                    <a href="{{ route('admin.settings.footer.logo.update', $logo->id) }}"
                                                                                         class="action-icon">
                                                                                        <i class="zmdi zmdi-edit zmdi-custom"></i></a>
                                                                                    <button
                                                                                        wire:click="deleteId({{ $logo->id }})"
                                                                                        data-toggle="modal"
                                                                                        data-target="#exampleModal"
                                                                                        class="action-icon"> <i
                                                                                            class="zmdi zmdi-delete zmdi-custom"></i></button>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                    {{ $logos->links() }}
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
