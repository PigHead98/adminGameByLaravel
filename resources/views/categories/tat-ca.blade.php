@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Danh sách người chơi</h4>
                        <table id="basic-datatable" class="table dt-responsive nowrap">
                            <thead>
                            <tr>
                                <th>Mã</th>
                                <th>Tên lĩnh vực</th>
                                <th>Sửa/Xóa</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $v)
                            <tr>
                                @if(1 == $v->xoa)
                                    <td>{{$v->id}}</td>
                                    <td>{{$v->ten_linh_vuc}}</td>
                                    <td>
                                        <a href="{{route('capnhatlinhvuc',['id' => $v->id])}}" title="edit" type="button" class="btn btn-warning waves-effect waves-light">
                                            <i class="mdi mdi-star"></i>
                                        </a>
                                        <a href="{{route('xoalinhvuc',['id' => $v->id])}}" title="del" type="button" class="btn btn-danger waves-effect waves-light">
                                            <i class="mdi mdi-close"></i>
                                        </a>
                                    </td>
                                @endif
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
    </div>

@endsection