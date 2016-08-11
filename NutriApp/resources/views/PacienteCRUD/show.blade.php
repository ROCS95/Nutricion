@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <div class="text-center">
                                    <h2>Paciente</h2>
                                </div>
                                <br>
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nombre:</strong>
                                   <input type="text"class="form-control"disabled="disabled" value="{{ $paciente->nombre }}" >

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Apellido:</strong>
                                    <input type="text"class="form-control"disabled="disabled" value="{{ $paciente->apellido }}" >
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Cédula:</strong>
                                    <input type="text"class="form-control"disabled="disabled" value="{{ $paciente->cedula }}" >
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Teléfono:</strong>
                                    <input type="text"class="form-control"disabled="disabled" value="{{ $paciente->telefono }}" >
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Dirección:</strong>
                                    <input type="text"class="form-control"disabled="disabled" value="{{ $paciente->direccion }}" >
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    <input type="text"class="form-control"disabled="disabled" value="{{ $paciente->email }}" >
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>


            <div class="col-sm-6 col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <div class="text-center">
                                    <h2>Pesos</h2>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-primary" href="{{ route('pacienteCRUD.index') }}"> Back</a>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Masa Corporal:</strong>
                                    <input type="text"class="form-control"readonly value="{{ $paciente->masa_corporal }}" >
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Peso:</strong>
                                    <input type="text"class="form-control"readonly value="{{ $paciente->peso }}" >
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Altura:</strong>
                                    <input type="text"class="form-control"readonly value="{{ $paciente->altura }}" >
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Edad:</strong>
                                    <input type="text"class="form-control"readonly value="{{ $paciente->edad }}" >
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Masa Muscular:</strong>
                                    <input type="text"class="form-control"readonly value="{{ $paciente->masa_muscular }}" >
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Masa Osea:</strong>
                                    <input type="text"class="form-control"readonly value="{{ $paciente->masa_osea }}" >
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>





@endsection