@section('title', 'مدیریت درخواست های تماس')

<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">

                    @cannot('contacts')
                        <div class="col-lg-12 box-margin">
                        @endcannot
                        @can('contacts')
                            <div class="col-12 box-margin">
                            @endcan
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-2">لیست تماس ها</h4>

                                    <hr>
                                    <input wire:model="search" type="search" class="form-control mb-2 w-50 float-left"
                                        placeholder="جستجو...">

                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                        style="width:102%" wire:init='loadContact'>
                                        <thead>
                                            <tr>
                                                <th>عنوان</th>
                                                <th>شماره تماس</th>
                                                <th>متن</th>
                                                <th>تاریخ ثبت</th>
                                            </tr>
                                        </thead>

                                        @if ($readyToLoad)
                                            <tbody>
                                                @foreach ($contacts as $contact)
                                                    <tr>
                                                        <td>{{ $contact->title }}</td>
                                                        <td>{{ $contact->mobile }}</td>
                                                        <td>{{ $contact->description }}</td>
                                                        <td>{{ $contact->created_at }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            {{ $contacts->links() }}
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
