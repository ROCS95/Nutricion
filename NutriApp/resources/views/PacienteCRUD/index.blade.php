@extends('layouts.default')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pacientes CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('paciente.create') }}"> Create New Paciente</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>

    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Cedula</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($items as $key => $item)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $item->nombre }}</td>
                <td>{{ $item->apellido }}</td>
                <td>{{ $item->cedula }}</td>
                <td>{{ $item->telefono }}</td>
                <td>{{ $item->direccion }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('paciente.show',$item->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('paciente.edit',$item->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['paciente.destroy', $item->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

    </table>

    {!! $items->render() !!}

@endsection