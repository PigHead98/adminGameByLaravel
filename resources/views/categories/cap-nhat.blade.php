@extends('layouts.app')
@php
    !empty($data)? $ten_linh_vuc       = $data->ten_linh_vuc      : $ten_linh_vuc    = '';
    !empty($data)? $id                 = $data->id                : $id              = '';
@endphp
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="card-box">
                    <h4 class="header-title">Cập nhật lĩnh vực game</h4>
                    <form method="post" action="{{route('checklinhvuc')}}" class="parsley-examples">
                        @csrf
                        <div class="form-group">
                            <label for="ten_linh_vuc">Tên lĩnh vực<span class="text-danger">*</span></label>
                            <input type="text" name="ten_linh_vuc" parsley-trigger="change" required
                                   value="{{$ten_linh_vuc}}" class="form-control" id="ten_linh_vuc">
                            <input type="hidden" name="id" parsley-trigger="change"
                                   value="{{$id}}" class="form-control" id="id">
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
