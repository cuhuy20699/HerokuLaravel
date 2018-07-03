@extends('admin.layoutAdmin.master')
@section('title', 'Order')
@section('js')
    {{--<script src="{{asset('js/admin/chart.js')}}"></script>--}}

@endsection

@section('content')
    <h3>Order</h3>
    @foreach($order as $key=>$item)
        <p>{{$item->product}}</p>
        <p>{{$item->fullname}}</p>
        <img src="{{$item->avatar}}" style=" with:60px; height: 60px" class="img-thumbnail">
    @endforeach
@endsection