@php
    !empty($data)?$ten_dang_nhap     = $data->ten_dang_nhap      : $ten_dang_nhap   = '';
    !empty($data)?$email             = $data->email              : $email           = '';
    !empty($data)?$mat_khau          = $data->mat_khau           : $mat_khau        = '';
    !empty($data)?$hinh_dai_dien     = $data->hinh_dai_dien      : $hinh_dai_dien   = '';
    !empty($data)?$diem_cao_nhat     = $data->diem_cao_nhat      : $diem_cao_nhat   = '';
    !empty($data)?$credit            = $data->credit             : $credit          = '';
    !empty($data)?$id                = $data->id                 : $id              = '';
@endphp
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="card-box">
                    <h4 class="header-title">Cập nhật người chơi</h4>
                    <form method="post" action="{{route('checknguoichoi')}}" class="parsley-examples" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="ten_dang_nhap">Tên đăng nhập<span class="text-danger">*</span></label>
                            <input type="text" name="ten_dang_nhap" parsley-trigger="change" required
                                   value="{{$ten_dang_nhap}}" class="form-control" id="ten_dang_nhap">
                            <input type="hidden" name="id" parsley-trigger="change"
                                   value="{{$id}}" class="form-control" id="id">
                        </div>
                        <div class="form-group">
                            <label for="emailAddress">Email<span class="text-danger">*</span></label>
                            <input type="email" name="email" parsley-trigger="change" required
                                   value="{{$email}}" class="form-control" id="emailAddress">
                        </div>
                        <div class="form-group">
                            <label for="mat_khau">Mật khẩu<span class="text-danger"></span></label>
                            <input type="password" name="mat_khau" parsley-trigger="change"
                                   value="{{$mat_khau}}" class="form-control" id="mat_khau" required>
                        </div>
                        <div class="form-group">
                            <input type="file" name="hinh_dai_dien" parsley-trigger="change"
                                   value="{{$hinh_dai_dien}}" required class="form-control-file" id="hinh_dai_dien">
                        </div>
                        <div class="form-group">
                            <label for="diem_cao_nhat">Điểm cao nhất<span class="text-danger"></span></label>
                            <input type="text" name="diem_cao_nhat" parsley-trigger="change"
                                   value="{{$diem_cao_nhat}}" class="form-control" id="diem_cao_nhat">
                        </div>
                        <div class="form-group">
                            <label for="credit">Credit<span class="text-danger"></span></label>
                            <input type="text" name="credit"        parsley-trigger="change"
                                   value="{{$credit}}" class="form-control" id="credit">
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
