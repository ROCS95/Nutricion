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
                                    <h1>Paciente</h1>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-primary" href="{{ route('pacienteCRUD.index') }}"> Atras</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                   <h3> <strong>Nombre:</strong></h3>
                                    <h4><p>{{ $paciente->nombre }}</p></h4>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <div class="form-group">
                                    <h3><strong>Apellido:</strong></h3>
                                    <h4><p>{{ $paciente->apellido }}</p></h4>
                                </div>
                            </div>
                            <div class="col-xs-4 col-md-4">
                                <div class="form-group">
                                   <h3> <strong>Cédula:</strong></h3>
                                    <h4><p>{{ $paciente->cedula }}</p></h4>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                   <h3> <strong>Teléfono:</strong></h3>
                                    <h4><p>{{ $paciente->telefono }}</p></h4>

                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <div class="form-group">
                                    <h3><strong>Dirección:</strong></h3>
                                    <h4><p>{{ $paciente->direccion }}</p></h4>
                                </div>
                            </div>
                            <div class="col-xs-4 col-md-4 ">
                                <div class="form-group">
                                    <h3><strong>E-mail:</strong></h3>
                                    <h4><p>{{ $paciente->email }}</p></h4>
                                </div>
                            </div>
                            <div class="col-lg-12 margin-tb">
                                <div class="text-center">
                                    <h1>Medidas</h1>
                                </div>
                                </br>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <h3> <strong>Masa Corporal:</strong></h3>
                                    <h4><p>{{ $paciente->masa_corporal }}</p></h4>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <div class="form-group">
                                    <h3> <strong>Peso:</strong></h3>
                                    <h4><p>{{ $paciente->peso }}</p></h4>
                                </div>
                            </div>
                            <div class="col-xs-4  col-md-4">
                                <div class="form-group">
                                    <h3><strong>Altura:</strong></h3>
                                    <h4><p>{{ $paciente->altura }}</p></h4>

                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 ">
                                <div class="form-group">
                                    <h3> <strong>Edad:</strong></h3>
                                    <h4><p>{{ $paciente->edad }}</p></h4>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <div class="form-group">
                                    <h3><strong>Masa Muscular:</strong></h3>
                                    <h4><p>{{ $paciente->masa_muscular }}</p></h4>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-4">
                                <div class="form-group">
                                    <h3><strong>Masa Ósea:</strong></h3>
                                    <h4><p>{{ $paciente->masa_osea }}</p></h4>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>



        </div>
</div>
@endsection