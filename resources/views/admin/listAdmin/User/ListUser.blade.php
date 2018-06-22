@extends('admin.layoutAdmin.master')
@section('title', 'User Admin')

@section('style')
    <link href="{{asset('vendor-admin/datatables-plugins/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('vendor-admin/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tables</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    List User
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>FullName</th>
                                    <th>Phone</th>
                                    <th>Password</th>
                                    <th>Emai</th>
                                    <th>Gender</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="demo-get">
                            </tbody>
                            <tbody >
                            @foreach($user as $item)
                                <tr id="{{$item->id}}">
                                    <td></td>
                                    <th class="col-md-2">
                                        <div class="card"
                                             style="background-image: url('{{$item->avatar}}'); background-size: cover; width: 60px; height: 60px;">
                                        </div>
                                        {{--<img src="" style=" with:60px; height: 60px" class="img-thumbnail">--}}
                                    </th>
                                    <td id="fullname-{{$item->id}}">{{$item->fullname}} </td>
                                    <td id="phone-{{$item->id}}"> {{$item->phone}} </td>
                                    <td id="password-{{$item->id}}">{{$item->password}}</td>
                                    <td id="email-{{$item->id}}" >{{$item->email}}</td>
                                    <td id="gender-{{$item->id}}">{{$item->gender}}</td>
                                    {{--<td>{{$item->create_at}}</td>--}}
                                    {{--<td>{{$item->update_at}}</td>--}}
                                    <td>
                                        <a href="/user/{{$item->id}}/edit" id="putUser" class="fa fa-edit"> Edit</a> <p> </p>
                                        <a href="/delete/{{$item->id}}" id="deleteUser" class="fa fa-trash"> Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>

    </div>
@endsection

@section('js')
    <script src="{{asset('vendor-admin/datatables/js/jquery.dataTables.min.js')}}"> </script>

    <script src="{{asset('vendor-admin/datatables-plugins/dataTables.bootstrap.min.js')}}"> </script>

    <script src="{{asset('vendor-admin/datatables-responsive/dataTables.responsive.js')}}"> </script>
    {{--<script src="{{asset('js/admin/listUser.js')}}"> </script>--}}
@endsection
