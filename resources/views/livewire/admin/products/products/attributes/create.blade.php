@extends('layouts.admin2')
@section('styles')
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/default-assets/select.bootstrap4.css') }}">
@endsection
@section('title', 'افزودن ویژگی برای محصول')
@section('content')
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">افزودن ویژگی برای محصول</h4>
                                <a href="{{ route('admin.products') }}" class="btn btn-success mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-list"></i> لیست
                                    محصولات</a>
                                <hr>
                                <form method="post" action="{{ route('admin.product.attributes.create',$product_id) }}">
                                    @CSRF
                                    @include('errors.error')

                                    <div class="row">
                                        @foreach ($attributes as $attribute)
                                            <div class="col-3 mt-30">
                                                <div class="form-group">

                                                    <label for="">{{ $attribute->title }}:</label>
                                                    <div wire:ignore>
                                                        <input type="hidden" value="{{ $attribute->id }}" name="attribute_id[]">
                                                        <select class="form-control"
                                                            name="attributeProducts[]"
                                                            id="value_id" class="value_id" style="width: 100%;">
                                                            <option value="">--هیچکدام--</option>
                                                            @foreach ($values as $value)
                                                                @if ($attribute->id == $value->attribute_id)
                                                                    <option value="{{ $value->id }}-{{ $attribute->id }}">
                                                                        {{ $value->value }}
                                                                    </option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                        @endforeach

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


@endsection

