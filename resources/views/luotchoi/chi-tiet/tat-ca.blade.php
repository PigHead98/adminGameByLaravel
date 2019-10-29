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
                                <th>Mã lượt chơi</th>
                                <th>Mã câu hỏi</th>
                                <th>Phương án </th>
                                <th>Điểm</th>
{{--                                <th>Edit/Del</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $v)
                                <tr>
                                    <td>{{$v->id}}</td>
                                    <td>{{$v->luot_choi_id}}</td>
                                    <td>{{$v->cau_hoi_id}}</td>
                                    <td>{{$v->phuong_an}}</td>
                                    <td>{{$v->diem}}</td>
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