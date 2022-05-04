@section('title', 'سطل زباله نقش ها')
<div>
    <div class="main-content">
        <div class="data-table-area" wire:init='loadRole'>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="">
                            <div class="card-body">
                                <h4 class="card-title mb-2">لیست نقش های حذف شده</h4>
                                <a href="{{ route('admin.roles') }}" class="btn btn-success mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-list-alt"></i> لیست نقش ها</a>
                                <hr>
                                <input wire:model="search" type="search" class="form-control mb-2 w-50 float-left"
                                    placeholder="جستجو...">

                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                    style="width:104%">
                                    <thead>
                                        <tr>
                                            <th>عنوان نقش</th>
                                            <th>توضیحات</th>
                                            <th>سطوح دسترسی</th>
                                            <th>عملیات</th>

                                        </tr>
                                    </thead>

                                    @if ($readyToLoad)
                                        <tbody>
                                            @foreach ($roles as $role)
                                                <tr>
                                                    <td>{{ $role->title }}</td>
                                                    <td>{{ $role->description }}</td>
                                                    <td>
                                                        @foreach ($role->permissions as $permission)
                                                            <span
                                                                style="border: 1px solid #ccc;padding: 0px 2px;border-radius: 3px;">{{ $permission->description }}</span>
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        <button wire:click="restore({{ $role->id }})"
                                                            class="action-icon">
                                                            <i class="zmdi zmdi-replay zmdi-custom"></i></button>
                                                        <button wire:click="deleteId({{ $role->id }})"
                                                            wire:click="deleteId({{ $role->id }})"
                                                            data-toggle="modal" data-target="#exampleModal"
                                                            class="action-icon"> <i
                                                                class="zmdi zmdi-delete zmdi-custom"></i></>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                        {{ $roles->links() }}
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
