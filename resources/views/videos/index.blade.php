@extends('master')
@section('content')
<div class="videos-header card">
    <h2>Najnowsze filmy</h2>
</div>
	@foreach($videos as $video)
    <!-- Single video -->
    <div class="col-xs-12 col-md-6 col-lg-4 single-video col-lg-offset-2 centered">
        <div class="card">
        
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{ $video->url }}?showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="card-content">
                <a href="{{url ('videos', $video->id) }}">
                    <h4>{{ $video->title }} ({{ $video->yearOfProduction }})</h4>
                </a>
                <h5>{{ $video->director }}</h5>
                <p>{{ $video->description }}</p>
                <span>Dodał:</span>
                <span>{{ $video->user->name}}</span>
            </div>
            
        </div>
    </div>

	@endforeach
@stop