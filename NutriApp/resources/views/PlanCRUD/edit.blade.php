@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <div class="text-center">
                                    <h2>Modificar Plan Nutricional</h2>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-primary" href="{{ route('planCRUD.index') }}"> Atras</a>
                                </div>
                            </div>
                        </div>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {!! Form::model($plan, ['method' => 'PATCH','route' => ['planCRUD.update', $plan->id]]) !!}
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Nombre:</strong>
                                    {!! Form::text('nombre', null, array('placeholder' => '','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Desayuno:</strong>
                                    {!! Form::textarea('desayuno', null, array('placeholder' => '','class' => 'form-control','style'=>'height:100px' ))!!}
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Merienda mañana:</strong>
                                    {!! Form::textarea('merienda_manana', null, array('placeholder' => '','class' => 'form-control','style'=>'height:100px')) !!}
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Almuerzo:</strong>
                                    {!! Form::textarea('almuerzo', null, array('placeholder' => '','class' => 'form-control','style'=>'height:100px')) !!}
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Merienda tarde:</strong>
                                    {!! Form::textarea('merienda_tarde', null, array('placeholder' => '','class' => 'form-control','style'=>'height:100px')) !!}
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Cena:</strong>
                                    {!! Form::textarea('cena', null, array('placeholder' => '','class' => 'form-control','style'=>'height:100px')) !!}
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    {!! Form::close() !!}

@endsection