@extends('template.Layout')
@section('apis2')
@foreach ($news as $new)

<div class="col-md-6">

    <div class="about_content">

        <h2>{{$new['title']}}</h2>
        <div class="separator_left"></div>

        <p>{{$new['description']}}</p>

        <div class="about_btns m-top-40">

            <img src="{{$new['urlToImage']}}">

            <a href="{{$new['url']}}" class="btn btn-primary">Mas informacion</a>

            <p>fecha de publicacion: {{$new['publishedAt']}}</p>
        </div>
    </div>
</div>
@endforeach
@endsection