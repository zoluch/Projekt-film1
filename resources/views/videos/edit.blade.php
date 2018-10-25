@extends('master')
@section('content')
<div class="container">
    <div class="col-lg-6 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
            <!-- Formularz -->
            	{!! Form::model($video, (['method'=>'PATCH','class'=>'form-horizontal', 'action'=>['VideosController@update', $video->id]])) !!}
                    @include('videos.form', ['buttonText'=>'Zapisz zmiany'])           
                {!! Form::close() !!}
            	
            </div>
        </div>
    </div>
</div>
@stop