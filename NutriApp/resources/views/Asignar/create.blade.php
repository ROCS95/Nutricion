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
                                    <h2>Datos personales</h2>
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

                        {!! Form::open(array('route' => 'asignar.store','method'=>'POST')) !!}
                        <div class="row">
                            <div class="form-group">
                                <label for="">Pacientes</label>
                                    <select name="id_paciente" class="form-control">
                                         @foreach($pacienteList as $list)
                                             <option value="{{$list->id}}">{{$list->nombre}}</option>
                                         @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="">Planes</label>
                                    <select name="id_plan" class="form-control">
                                         @foreach($planList as $listp)
                                            <option value="{{$listp->id}}">{{$listp->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>


                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Asignar</button>
                                </div>
                                <br/>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {!! Form::close() !!}

@endsection