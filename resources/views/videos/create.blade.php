@extends('master')
@section('content')
<div class="container">
    <div class="col-lg-6 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
            <!-- Formularz -->
            	{!! Form::open(['url'=>'videos','class'=>'form-horizontal']) !!}
                    @include('videos.form', ['buttonText'=>'Dodaj film'])
                {!! Form::close() !!}            	
            </div>
        </div>
    </div>
</div>
@stop