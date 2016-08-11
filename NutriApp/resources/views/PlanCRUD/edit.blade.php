@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-offset-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <div class="text-center">
                                    <h2>Modificar Plan Nutricional</h2>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-primary" href="{{ route('planCRUD.index') }}"> Back</a>
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
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nombre:</strong>
                                    {!! Form::text('nombre', null, array('placeholder' => '','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Desayuno:</strong>
                                    {!! Form::text('desayuno', null, array('placeholder' => '','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Merienda mañana:</strong>
                                    {!! Form::text('merienda_manana', null, array('placeholder' => '','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Almuerzo:</strong>
                                    {!! Form::text('almuerzo', null, array('placeholder' => '','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Merienda tarde:</strong>
                                    {!! Form::text('merienda_tarde', null, array('placeholder' => '','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Cena:</strong>
                                    {!! Form::text('cena', null, array('placeholder' => '','class' => 'form-control')) !!}
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">edit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    {!! Form::close() !!}

@endsection