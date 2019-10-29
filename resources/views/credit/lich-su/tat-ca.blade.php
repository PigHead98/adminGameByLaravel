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
                            <tr>
                                <td>#</td>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>2011/04/25</td>
                                <td>2011/04/25</td>
                                <td>
                                    <button title="edit" type="button" class="btn btn-warning waves-effect waves-light">
                                        <i class="mdi mdi-star"></i>
                                    </button>
                                    <button title="del" type="button" class="btn btn-danger waves-effect waves-light">
                                        <i class="mdi mdi-close"></i>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
    </div>

@endsection