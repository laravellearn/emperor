@section('title', 'سطل زباله های فوتر')
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
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mail-body--area">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12 box-margin">
                                                    <div class="">
                                                        <div class="card-body">
                                                            <h4 class="card-title mb-2">لیست لوگو های حذف شده فوتر</h4>
                                                            <a href="{{ route('admin.settings.footer.logo') }}" class="btn btn-success mb-2 mr-2" style="float:left;margin-top:-37px;"><i class="fa fa-list-alt"></i> لیست لوگوهای فوتر</a>
                                                            <hr>
                                                            <input wire:model="search" type="search"
                                                                class="form-control mb-2 w-25 float-right"
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
                                                                                <td>{{ $logo->title }}</td>
                                                                                <td>{{ $logo->type == 'top' ? 'لوگوی بالای فوتر' : 'لوگوی پایین فوتر' }}
                                                                                </td>
                                                                                <td>
                                                                                    @if ($logo->isActive == 1)
                                                                                        <span class="badge badge-success">فعال</span>
                                                                                    @else
                                                                                       <span  class="badge badge-danger">غیرفعال</span>
                                                                                    @endif
                                                                                </td>
                                                                                <td>
                                                                                    <button wire:click="restore({{ $logo->id }})"
                                                                                         class="action-icon">
                                                                                        <i class="zmdi zmdi-replay zmdi-custom"></i></button>
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

