@extends('admin.layoutAdmin.master')
@section('title', 'Create User')
@section('style')

@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create User</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-primary">
                <div class="panel-heading text-capitalize">
                    đăng ký thành viên
                </div>
                <div class="panel-body">
                        <form id="add-user" class="form-horizontal">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right">Fullname</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="fullname" placeholder="Nhập tên đầy đủ" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right">Phone</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="phone" placeholder="Nhập số điện thoại" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right">Password</label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right">Email</label>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" id="email" placeholder="Nhập email" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right">Salt</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="salt" placeholder="Nhập tên đầy đủ" >
                                </div>
                            </div>

                            {{--<div class="form-group row">--}}
                                {{--<label class="col-md-2 col-form-label text-right">Status</label>--}}
                                {{--<div class="col-md-8">--}}
                                    {{--<input type="text" class="form-control" id="status" placeholder="Nhập số điện thoại">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label></label>
                                </div>
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </div>
                            </div>
                        </form>

                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@endsection

@section('js')
    <script src="{{asset('vendor-admin/datatables/js/jquery.dataTables.min.js')}}"> </script>

    <script src="{{asset('vendor-admin/datatables-plugins/dataTables.bootstrap.min.js')}}"> </script>

    <script src="{{asset('vendor-admin/datatables-responsive/dataTables.responsive.js')}}"> </script>

    <script src="{{asset('vendor-admin/datatables-responsive/dataTables.responsive.js')}}"> </script>
    <script src="{{asset('js/admin/formUser.js')}}"> </script>
@endsection