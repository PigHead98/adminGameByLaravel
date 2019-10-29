@extends('layouts.app')
@php
    !empty($data)?  $noi_dung                = $data->noi_dung              : $noi_dung            = '';
    !empty($data)?  $phuong_an_a             = $data->phuong_an_a           : $phuong_an_a         = '';
    !empty($data)?  $phuong_an_b             = $data->phuong_an_b           : $phuong_an_b         = '';
    !empty($data)?  $phuong_an_c             = $data->phuong_an_c           : $phuong_an_c         = '';
    !empty($data)?  $phuong_an_d             = $data->phuong_an_d           : $phuong_an_d         = '';
    !empty($data)?  $dap_an                  = $data->dap_an                : $dap_an              = '';
    !empty($data)?  $id                      = $data->id                    : $id                  = '';
@endphp
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="card-box">
                    <h4 class="header-title">Cập nhật người chơi</h4>
                    <form method="post" action="{{route('checkcauhoi')}}" class="parsley-examples">
                        @csrf
                        <div class="form-group">
                            <label for="noi_dung">Nội dung<span class="text-danger">*</span></label>
                            <input type="text" name="noi_dung" parsley-trigger="change" required
                                   value="{{$noi_dung}}" class="form-control" id="noi_dung">
                            <input type="hidden" name="id" parsley-trigger="change"
                                   value="{{$id}}" class="form-control" id="id">
                        </div>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label for="linh_vuc_id">Lĩnh vực</label>
                                <select class="form-control" name="linh_vuc_id" id="linh_vuc_id">
                                    @foreach($linhvuc as $k => $value)
                                        @if(2 != $value->xoa)
                                            <option value="{{$value->id}}"
                                                    @if(!empty($linhvuc_of_question) && $linhvuc_of_question->id == $value->id)
                                                            selected
                                                    @endif>
                                                {{$value->ten_linh_vuc}}
                                            </option>
                                        @endif
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phuong_an_a">Phương án A<span class="text-danger">*</span></label>
                            <input id="phuong_an_a" name="phuong_an_a" type="text" required
                                   value="{{$phuong_an_a}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phuong_an_b">Phương án B<span class="text-danger">*</span></label>
                            <input id="phuong_an_b" name="phuong_an_b" type="text" required
                                   value="{{$phuong_an_b}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phuong_an_c">Phương án C<span class="text-danger">*</span></label>
                            <input id="phuong_an_c" name="phuong_an_c" type="text" required
                                   value="{{$phuong_an_c}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phuong_an_d">Phương án D<span class="text-danger">*</span></label>
                            <input id="phuong_an_d" name="phuong_an_d" type="text" required
                                   value="{{$phuong_an_d}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="dap_an">Đáp án<span class="text-danger">*</span></label>
                            <input type="text" name="dap_an" parsley-trigger="change" required
                                   value="{{$dap_an}}"  class="form-control" id="dap_an">
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
