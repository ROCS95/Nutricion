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
                                    <h2>Plan Nutricional</h2>
                                </div>
                                <div class="pull-right">
                                    <br/>

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

                        {!! Form::open(array('route' => 'planCRUD.store','method'=>'POST')) !!}
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                   <h3><strong>Nombre:</strong></h3>
                                    {!! Form::text('nombre', null, array('placeholder' => '','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <h3><strong>Desayuno:</strong></h3>
                                    {!! Form::textarea('desayuno', null, array('placeholder' => '','class' => 'form-control','style'=>'height:100px')) !!}
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <h3><strong>Merienda mañana:</strong></h3>
                                    {!! Form::textarea('merienda_manana', null, array('placeholder' => '','class' => 'form-control','style'=>'height:100px')) !!}
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <h3><strong>Almuerzo:</strong></h3>
                                    {!! Form::textarea('almuerzo', null, array('placeholder' => '','class' => 'form-control','style'=>'height:100px')) !!}
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                   <h3> <strong>Merienda tarde:</strong></h3>
                                    {!! Form::textarea('merienda_tarde', null, array('placeholder' => '','class' => 'form-control','style'=>'height:100px')) !!}
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                   <h3> <strong>Cena:</strong></h3>
                                    {!! Form::textarea('cena', null, array('placeholder' => '','class' => 'form-control','style'=>'height:100px')) !!}
                                </div>
                            </div>


                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Crear</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>




    {!! Form::close() !!}

@endsection