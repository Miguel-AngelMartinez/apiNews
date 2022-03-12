@extends('template.Layout')
@section('apis3')
@foreach($news as $news)
<div class="col-md-6">

    <div class="about_content">

        <h2>{{$news['titulo']}}</h2>
        <div class="separator_left"></div>

        <p>{{$news['contenido']}}</p>

        <div class="about_btns m-top-40">

            <img src="{{$news['imagen']}}">
            <br>
            <p>fecha de publicacion: {{$news['autor']}}</p>
        </div>
    </div>
</div>
@endforeach
@endsection