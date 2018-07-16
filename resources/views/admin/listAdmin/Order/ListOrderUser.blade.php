@extends('admin.layoutAdmin.master')
@section('title', 'Order')
@section('js')
    {{--<script src="{{asset('js/admin/chart.js')}}"></script>--}}

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
                    List Order
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>User</th>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id="demo-get">
                            </tbody>
                            <tbody >
                            @foreach($order as $item)
                                <tr id="{{$item->id}}">
                                    <td>{{$item->id}}</td>
                                    <th class="col-md-2">
                                        <div class="card"
                                             style="background-image: url('{{$item->avatar}}'); background-size: cover; width: 60px; height: 60px;">
                                        </div>
                                    </th>
                                    <td>{{$item->fullname}} </td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->quantity}}</td>
                                    {{--<td id="password-{{$item->id}}">{{$item->title}}</td>--}}
                                    {{--<td id="email-{{$item->id}}" >{{$item->price}}</td>--}}
                                    <td>
                                        <a href="/order/{{$item->id}}/edit" id="putUser" class="fa fa-edit"> Edit</a> <p> </p>

                                        <a href="#" class="fa fa-trash btn-delete"> Delete</a>
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
