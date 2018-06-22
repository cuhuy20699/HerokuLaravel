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
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{$action}}" id="add-user" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        @if($method == "PUT")
                            <input name="_method" type="hidden" value="PUT">
                        @endif
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-right">Fullname</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="fullname" value="{{$product->fullname}}" id="fullname" placeholder="Nhập tên đầy đủ" >
                                <small class="text-danger">{{$errors->first('fullname')}}</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-right">Phone</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="phone" id="phone" value="{{$product->phone}}" placeholder="Nhập số điện thoại" >
                                <small class="text-danger">{{$errors->first('phone')}}</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-right">Password</label>
                            <div class="col-md-8">
                                <input type="password" class="form-control" name="password" id="password" value="{{$product->password}}" placeholder="Nhập mật khẩu" >
                                <small class="text-danger">{{$errors->first('password')}}</small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-right">Email</label>
                            <div class="col-md-8">
                                <input type="email" class="form-control" value="{{$product->email}}" name="email" id="email" placeholder="Nhập email" >
                                <small class="text-danger">{{$errors->first('email')}}</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-right">Gender</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" value="{{$product->gender}}" name="gender" placeholder="Nhập giới tính" >
                                {{--<label class="radio-inline">--}}
                                {{--<input type="radio" name="gender"  value="male" checked>Male--}}
                                {{--</label>--}}
                                {{--<label class="radio-inline">--}}
                                {{--<input type="radio" name="gender"  value="famale">Famale--}}
                                {{--</label>--}}
                                {{--<label class="radio-inline">--}}
                                {{--<input type="radio" name="gender"  value="orther">Khác--}}
                                {{--</label>--}}
                                <small class="text-danger">{{$errors->first('gender')}}</small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-right">Avatar</label>
                            <div class="col-md-8">
                                <input type="file" name="avatar" id="avatar">
                                <small class="text-danger">{{$errors->first('avatar')}}</small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label> </label>
                            </div>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-default">Submit</button>
                                <button type="Reset" class="btn btn-default">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>
@endsection

@section('js')
    <script src="{{asset('vendor-admin/datatables/js/jquery.dataTables.min.js')}}"> </script>

    <script src="{{asset('vendor-admin/datatables-plugins/dataTables.bootstrap.min.js')}}"> </script>

    <script src="{{asset('vendor-admin/datatables-responsive/dataTables.responsive.js')}}"> </script>

    <script src="{{asset('vendor-admin/datatables-responsive/dataTables.responsive.js')}}"> </script>

    {{--<script src="{{asset('js/admin/formUser.js')}}"> </script>--}}
@endsection