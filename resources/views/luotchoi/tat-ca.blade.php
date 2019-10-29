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
                                <th>Mã người chơi</th>
                                <th>Số câu</th>
                                <th>Điểm</th>
                                <th>Ngày giờ</th>
{{--                                <th>Edit/Del</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $v)
                            <tr>
                                <td>{{$v->id}}</td>
                                <td>{{$v->nguoi_choi_id}}</td>
                                <td>{{$v->so_cau}}</td>
                                <td>{{$v->diem}}</td>
                                <td>{{$v->ngay_gio}}</td>
{{--                                <td>--}}
{{--                                    <button title="edit" type="button" class="btn btn-warning waves-effect waves-light">--}}
{{--                                        <i class="mdi mdi-star"></i>--}}
{{--                                    </button>--}}
{{--                                    <button title="del" type="button" class="btn btn-danger waves-effect waves-light">--}}
{{--                                        <i class="mdi mdi-close"></i>--}}
{{--                                    </button>--}}
{{--                                </td>--}}
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