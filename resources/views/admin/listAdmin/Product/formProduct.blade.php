@extends('admin.layoutAdmin.master')
@section('title', 'Create User')
@section('style')
    <link href="{{asset('css/layout.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create Product</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-primary">
                <div class="panel-heading text-capitalize">
                    Sản phẩm mới
                </div>
                <div class="panel-body">
                    {{--@if ($errors->any())--}}
                        {{--<div class="alert alert-danger">--}}
                            {{--<ul>--}}
                                {{--@foreach ($errors->all() as $error)--}}
                                    {{--<li>{{ $error }}</li>--}}
                                {{--@endforeach--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    <form {{--action="{{$action}}"--}} id="add-product" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        {{--@if($method == "PUT")--}}
                            {{--<input name="_method" type="hidden" value="PUT">--}}
                        {{--@endif--}}
                        {{ csrf_field() }}
                        <div class="form-group row fullname-group">
                            <label class="col-md-2 col-form-label text-right">Title</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="title"  id="title" placeholder="Nhập tên sản phẩm" >
                                {{--value="{{$product->fullname}}"--}}
                                {{--<div class="fullname-icon-err">--}}
                                    {{--<i class="fa fa-check"></i>--}}
                                {{--</div>--}}
                                {{--<p class="fullname-err font-weight-normal"></p>--}}
                                {{--<small class="text-danger">{{$errors->first('fullname')}}</small>--}}
                            </div>
                        </div>

                        <div class=" form-group row phone-group">
                            <label class="col-md-2 col-form-label text-right">Description</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="description" id="description"  placeholder="Nhập chú thích cho sản phẩm" >
                                {{--value="{{$product->phone}}"--}}
                                {{--<div class="phone-icon-err">--}}
                                    {{--<i class="fa fa-check"></i>--}}
                                {{--</div>--}}
                                {{--<p class="phone-err font-weight-normal"></p>--}}
                                {{--<small class="text-danger">{{$errors->first('phone')}}</small>--}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-right">Price</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="price" id="price" placeholder="Nhập giá">
                                {{--value="{{$product->avatar}}"--}}
                                {{--<small class="text-danger">{{$errors->first('avatar')}}</small>--}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-right">Avatar</label>
                            <div class="col-md-8">
                                <input type="file" name="avatar" id="avatar">
                                {{--<input type="text" hidden name="avatar" id="avatar" >--}}
                                {{--value="{{$product->avatar}}"--}}
                                {{--<small class="text-danger">{{$errors->first('avatar')}}</small>--}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label> </label>
                            </div>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-default">Submit</button>
                                <button type="reset" class="btn btn-default">Reset</button>
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