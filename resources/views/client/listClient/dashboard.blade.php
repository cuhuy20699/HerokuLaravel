@extends('client.layoutHomepage.master')
@section('title', 'Dashboard Admin')

@section('content')
    <section id="team" class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">



                    <ul>
        @foreach($product as $key =>$item)
            <img alt="C&#212;NG TY TNHH PH&#193;T TRIỂN C&#212;NG NGHỆ RUNTIME"
                 src="{{$item->thumbnail}}"
                 class="img-responsive"/>
        @endforeach
    </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection