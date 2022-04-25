@section('title', 'منو های فوتر')
<div>
    <div class="data-table-area">
        <div class="container-fluid" wire:init='loadMenu'>
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
                                                    <li><a href="{{ route('admin.settings.footer.logo') }}"> لوگوهای
                                                            فوتر </a></li>
                                                    <li class="active"><a
                                                            href="{{ route('admin.settings.footer.menu') }}"> منوهای
                                                            فوتر </a></li>
                                                    <li><a href="{{ route('admin.settings.footer.namad') }}"> نمادهای
                                                            سایت </a></li>

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
                                                        <h4 class="card-title mb-2">افزودن منو برای فوتر</h4>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-12 col-xs-12">
                                                                <form role="form" wire:submit.prevent='MenuForm'>
                                                                    @include('errors.error')
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail111">عنوان
                                                                            منو:</label>
                                                                        <input type="text" wire:model="Footermenu.title"
                                                                            class="form-control"
                                                                            id="exampleInputEmail111">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail111">لینک:</label>
                                                                        <input type="text" style="text-align:left"
                                                                            wire:model="Footermenu.url"
                                                                            class="form-control"
                                                                            id="exampleInputEmail111">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail12">جایگاه
                                                                            منو:</label>
                                                                        <select class="form-control"
                                                                            wire:model="Footermenu.type"
                                                                            style="width: 100%;" required>
                                                                            <option value="">-- هیچکدام --</option>
                                                                            @php
                                                                                $i = 0;
                                                                            @endphp
                                                                            @foreach ($headerMenu as $header)
                                                                                @php
                                                                                    $i++;
                                                                                    $widgetLabel = 'widgetLabel' . $i;
                                                                                @endphp
                                                                                @if ($header != null)
                                                                                    <option
                                                                                        value="{{ $widgetLabel }}">
                                                                                        {{ $header }}</option>
                                                                                @endif
                                                                            @endforeach
                                                                        </select>
                                                                    </div>

                                                                    <button type="submit"
                                                                        class="btn btn-outline-success mt-3 mb-2 mr-2"
                                                                        style="float:left;"><i
                                                                            class="fa fa-save"></i> ذخیره</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-12 col-lg-8 box-margin">
                                                    <div class="">
                                                        <div class="card-body">
                                                            <h4 class="card-title mb-2">لیست منو های فوتر</h4>
                                                            <hr>
                                                            <input wire:model="search" type="search"
                                                                class="form-control mb-2 w-50 float-left"
                                                                placeholder="جستجو...">

                                                            <table id="datatable-buttons"
                                                                class="table table-striped dt-responsive nowrap"
                                                                style="width:104%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>عنوان منو</th>
                                                                        <th>جایگاه</th>
                                                                        <th>وضعیت</th>
                                                                        <th>عملیات</th>
                                                                    </tr>
                                                                </thead>

                                                                @if ($readyToLoad)
                                                                    <tbody>
                                                                        @foreach ($menus as $menu)
                                                                            <tr>
                                                                                <td><a href="{{ $menu->url }}"
                                                                                        target="_blank">{{ $menu->title }}</a>
                                                                                </td>
                                                                                <td>
                                                                                    @switch($menu->type)
                                                                                        @case('widgetLabel1')
                                                                                            ستون اول
                                                                                        @break

                                                                                        @case('widgetLabel2')
                                                                                            ستون دوم
                                                                                        @break

                                                                                        @case('widgetLabel3')
                                                                                            ستون سوم
                                                                                        @break

                                                                                        @case('widgetLabel4')
                                                                                            ستون چهارم
                                                                                        @break

                                                                                        @case('widgetLabel5')
                                                                                            ستون پنجم
                                                                                        @break

                                                                                        @default
                                                                                            {{ هیچکدام }}
                                                                                    @endswitch
                                                                                </td>
                                                                                <td>
                                                                                    @if ($menu->isActive == 1)
                                                                                        <a wire:click="changeStatus({{ $menu->id }})"
                                                                                            style="cursor:pointer"><span
                                                                                                class="badge badge-success">فعال</span></a>
                                                                                    @else
                                                                                        <a wire:click="changeStatus({{ $menu->id }})"
                                                                                            style="cursor:pointer"><span
                                                                                                class="badge badge-danger">غیرفعال</span></a>
                                                                                    @endif
                                                                                </td>
                                                                                <td>
                                                                                    <a href="{{ route('admin.settings.footer.menu.update', $menu->id) }}"
                                                                                        class="action-icon">
                                                                                        <i
                                                                                            class="zmdi zmdi-edit zmdi-custom"></i></a>
                                                                                    <button
                                                                                        wire:click="deleteId({{ $menu->id }})"
                                                                                        data-toggle="modal"
                                                                                        data-target="#exampleModal"
                                                                                        class="action-icon"> <i
                                                                                            class="zmdi zmdi-delete zmdi-custom"></i></button>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                    {{ $menus->links() }}
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
</div>
