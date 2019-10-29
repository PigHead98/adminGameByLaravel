@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Danh sách câu hỏi</h4>
                        <table id="basic-datatable" class="table dt-responsive nowrap">
                            <thead>
                            <tr>
                                <th>Mã</th>
                                <th>Nội dung</th>
                                <th>Lĩnh vực</th>
                                <th>Phương án A</th>
                                <th>Phương án B</th>
                                <th>Phương án C</th>
                                <th>Phương án D</th>
                                <th>Đáp án</th>
                                <th>Edit/Del</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $v)
                            <tr>
                                @if($v->xoa)
                                    <td>{{$v->id}}</td>
                                    <td>{{$v->noi_dung}}</td>
                                    @foreach($linhvuc as $k => $value)
                                        @if($v->linh_vuc_id == $value->id)
                                            <td>{{$value->ten_linh_vuc}}</td>
                                        @endif
                                    @endforeach
                                    <td>{{$v->phuong_an_a}}</td>
                                    <td>{{$v->phuong_an_b}}</td>
                                    <td>{{$v->phuong_an_c}}</td>
                                    <td>{{$v->phuong_an_d}}</td>
                                    <td>{{$v->dap_an}}</td>
                                    <td>
                                        <a href="{{route('capnhatcauhoi',['id' => $v->id])}}" title="edit" type="button" class="btn btn-warning waves-effect waves-light">
                                            <i class="mdi mdi-star"></i>
                                        </a>
                                        <a href="{{route('xoacauhoi',['id' => $v->id])}}" title="del" type="button" class="btn btn-danger waves-effect waves-light">
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