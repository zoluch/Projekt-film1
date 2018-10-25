@extends('master')
@section('content')
<div class="col-xs-12 videos-header card">
    <h2>{{ $video->title }} ({{ $video->yearOfProduction }})</h2>
</div>
 <div class="container">

    <div class="col-xs-12 col-md-9 single-video-left">

        <div class="card">

            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{$video->url}}?showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>
        
            <div class="single-video-content">
                <h4>Opis filmu wyreżyserowanego przez {{ $video->director }} ({{ $video->timeFilm }})</h4><br>
                <p>{{ $video->description }}</p><br>
                <p>Produkcja: {{ $video->production}}. <br>
                <p>Aktorzy: {{$video->actors}}</p><br>
                <div>
                    <h4>Gatunek:</h4>
                    @foreach($video->categories as $category)
                        <span>{{ $category->name }}&nbsp;</span>
                    @endforeach
                </div>
                <span>Dodał:</span>
                <span>{{ $video->user->name}}</span>                
                    <a href="{{ action('VideosController@edit', $video->id)}}" class="button" style="width:15%;">
                        Edytuj
                    </a>
                </div>
            </div>
            
        </div>
        
    </div>

</div>
@stop