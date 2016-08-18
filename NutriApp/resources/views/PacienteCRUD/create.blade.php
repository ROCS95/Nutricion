@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <div class="text-center">
                                    <h2>Datos personales</h2>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-primary" href="{{ route('pacienteCRUD.index') }}"> Back</a>
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

                        {!! Form::open(array('route' => 'pacienteCRUD.store','method'=>'POST')) !!}
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <strong>Nombre:</strong>
                                    {!! Form::text('nombre', null, array('placeholder' => 'Nombre','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <strong>Apellido:</strong>
                                    {!! Form::text('apellido', null, array('placeholder' => 'Apellido','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <strong>Cédula:</strong>
                                    {!! Form::text('cedula', null, array('placeholder' => 'Cédula','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <strong>Teléfono:</strong>
                                    {!! Form::text('telefono', null, array('placeholder' => 'Teléfono','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <strong>Dirección:</strong>
                                    {!! Form::text('direccion', null, array('placeholder' => 'Dirección','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="text-center">
                                <h2>Medidas</h2>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <strong>Masa Corporal:</strong>
                                    {!! Form::text('masa_corporal', null, array('placeholder' => 'Masa Corporal','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <strong>Peso:</strong>
                                    {!! Form::text('peso', null, array('placeholder' => 'Peso','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <strong>Altura:</strong>
                                    {!! Form::text('altura', null, array('placeholder' => 'Altura','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <strong>Edad:</strong>
                                    {!! Form::text('edad', null, array('placeholder' => 'Edad','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <strong>Masa Muscular:</strong>
                                    {!! Form::text('masa_muscular', null, array('placeholder' => 'Masa Muscular','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <strong>Masa Osea:</strong>
                                    {!! Form::text('masa_osea', null, array('placeholder' => 'Masa Osea','class' => 'form-control')) !!}
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
    {!! Form::close() !!}

@endsection