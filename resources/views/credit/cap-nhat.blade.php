@extends('layouts.app')
@php
    !empty($data)?  $ten_goi               = $data->ten_goi              : $ten_goi           = '';
    !empty($data)?  $credit                = $data->credit               : $credit            = '';
    !empty($data)?  $so_tien               = $data->so_tien              : $so_tien           = '';
    !empty($data)?  $id                    = $data->id                   : $id                = '';
@endphp
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="card-box">
                    <h4 class="header-title">Cập nhật credit</h4>
                    <form method="post" action="{{route('checkcredit')}}" class="parsley-examples">
                        @csrf
                        <div class="form-group">
                            <label for="ten_goi">Tên<span class="text-danger">*</span></label>
                            <input type="text" name="ten_goi" parsley-trigger="change" required
                                   value="{{$ten_goi}}" class="form-control" id="ten_goi">
                            <input type="hidden" name="id" parsley-trigger="change"
                                   value="{{$id}}" class="form-control" id="id">
                        </div>
                        <div class="form-group">
                            <label for="credit">Credit<span class="text-danger">*</span></label>
                            <input id="credit" name="credit" type="text" required
                                   value="{{$credit}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="so_tien">Số tiền<span class="text-danger">*</span></label>
                            <input id="so_tien" name="so_tien" type="text" required
                                   value="{{$so_tien}}" class="form-control">
                        </div>
                        <div class="form-group text-right mb-0">
                            <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                Submit
                            </button>
                            <button type="reset" class="btn btn-secondary waves-effect">
                                Cancel
                            </button>
                        </div>

                    </form>
                </div> <!-- end card-box -->
            </div>
            <!-- end col -->
        </div>
    </div>
@endsection
