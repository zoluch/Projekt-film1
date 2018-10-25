<div class="form-group">
    <div class="col-md-4 control-label">
        {!! Form::label('title', 'Tytuł:') !!}
    </div>
                        <div class="col-md-12">
                            {!! Form::text('title', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 control-label">
                            {!! Form::label('yearOfProduction', 'Rok produkcji:') !!}
                        </div>
                        <div class="col-md-12">
                            {!! Form::date('yearOfProduction', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 control-label">
                            {!! Form::label('director', 'Reżyser:') !!}
                        </div>
                        <div class="col-md-12">
                            {!! Form::text('director', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 control-label">
                            {!! Form::label('timeFilm', 'Długość filmu:') !!}
                        </div>
                        <div class="col-md-12">
                            {!! Form::text('timeFilm', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 control-label">
                            {!! Form::label('actors', 'Aktorzy:') !!}
                        </div>
                        <div class="col-md-12">
                            {!! Form::textarea('actors', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 control-label">
                            {!! Form::label('description', 'Opis filmu:') !!}
                        </div>
                        <div class="col-md-12">
                            {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 control-label">
                            {!! Form::label('production', 'Kraj produkcji:') !!}
                        </div>
                        <div class="col-md-12">
                            {!! Form::text('production', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 control-label">
                            {!! Form::label('url', 'URL filmu:') !!}
                        </div>
                        <div class="col-md-12">
                            {!! Form::text('url', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 control-label">
                            {!! Form::label('CategoryList', 'Gatunek:') !!}
                        </div>
                        <div class="col-md-12">
                            {!! Form::select('CategoryList[]', $categories ,null, ['class'=>'form-control', 'multiple']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit($buttonText,['class'=>'button']) !!}
                        </div>
                    </div>