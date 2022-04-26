@section('title', 'گزارشات سیستمی')
<div>
    <div class="data-table-area">
        <div class="container-fluid" wire:init='loadLog'>
            <div class="row">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-2">گزارشات سیستمی</h4>
                            <hr>
                            <input wire:model="search" type="search"
                            class="form-control mb-2 w-50 float-left"
                            placeholder="جستجو...">

                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>نام کاربر</th>
                                        <th>موبایل کاربر</th>
                                        <th>آیپی</th>
                                        <th>نوع کار</th>
                                        <th>شرح عملیات - عنوان</th>
                                        <th>تاریخ انجام</th>
                                    </tr>
                                </thead>
                                @if ($readyToLoad)

                                    <tbody>
                                        @foreach ($logs as $log)
                                            <tr>
                                                <td>
                                                    {{ $log->user->name }}
                                                </td>
                                                <td>
                                                    {{ $log->user->mobile }}
                                                </td>
                                                <td>
                                                    {{ $log->ip }}
                                                </td>
                                                <td>
                                                    @switch($log->actionType)
                                                        @case('create')
                                                            <div class="badge badge-success">ایجاد</div>
                                                        @break

                                                        @case('delete')
                                                            <div class="badge badge-danger">حذف</div>
                                                        @break

                                                        @case('update')
                                                            <div class="badge badge-primary">ویرایش</div>
                                                        @break

                                                        @case('restore')
                                                            <div class="badge badge-info">بازیابی</div>
                                                        @break

                                                        @default
                                                    @endswitch
                                                {{-- <div class="badge badge-warning">دیگر</div>  --}}
                                                </td>
                                                <td>
                                                    {{ $log->description }}
                                                </td>
                                                <td>
                                                    {{ $log->created_at }}
                                                </td>
                                                <td>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    {{ $logs->links() }}
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
