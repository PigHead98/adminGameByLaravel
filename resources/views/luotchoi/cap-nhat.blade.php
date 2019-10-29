@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="card-box">
                    <h4 class="header-title">Cập nhật người chơi</h4>
                    <form method="post" action="#" class="parsley-examples">
                        @csrf
                        <div class="form-group">
                            <label for="noi_dung">Nội dung<span class="text-danger">*</span></label>
                            <input type="text" name="noi_dung" parsley-trigger="change" required
                                   class="form-control" id="noi_dung">
                        </div>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label for="linh_vuc_id">Lĩnh vực</label>
                                <select class="form-control" id="linh_vuc_id">
                                    <option value="1">1</option>
                                    <option value="1">2</option>
                                    <option value="1">3</option>
                                    <option value="1">4</option>
                                    <option value="1">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phuong_an_a">Phương án A<span class="text-danger">*</span></label>
                            <input id="phuong_an_a" type="text" required
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phuong_an_b">Phương án B<span class="text-danger">*</span></label>
                            <input id="phuong_an_b" type="text" required
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phuong_an_c">Phương án C<span class="text-danger">*</span></label>
                            <input id="phuong_an_c" type="text" required
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phuong_an_d">Phương án D<span class="text-danger">*</span></label>
                            <input id="phuong_an_d" type="text" required
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="dap_an">Đáp án<span class="text-danger">*</span></label>
                            <input type="text" name="dap_an" parsley-trigger="change" required
                                    class="form-control" id="dap_an">
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
