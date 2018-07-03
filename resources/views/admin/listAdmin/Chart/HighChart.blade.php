@extends('admin.layoutAdmin.master')
@section('title', 'High Chart')
@section('js')
    <script src="{{asset('js/admin/chart.js')}}"></script>
    <script src="{{asset('https://code.highcharts.com/highcharts.js')}}"> </script>
@endsection

@section('content')
    <div id="chart1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
@endsection