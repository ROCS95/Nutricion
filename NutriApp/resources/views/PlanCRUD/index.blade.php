@extends('layouts.app')
@section('content')

    <div class="row">
            <div class="text-center">
                <h2>Planes Nutricionales</h2>
            </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-danger">
                    <br>
                    <div class=" col-md-offset-10">
                        <a class="btn-lg btn-success" href="{{ route('planCRUD.create') }}"> Nuevo plan</a>
                    </div>
                    <div class="panel-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>

                        @endif

                        <table class="table table-bordered">
                            <tr>
                                <th>Nombre</th>
                                <th>Desayuno</th>
                                <th>Merienda Mañana</th>
                                <th>Almuerzo</th>
                                <th>Merienda Tarde</th>
                                <th>Cena</th>
                                <th width="280px">Action</th>
                            </tr>

                            @foreach ($planes as $key => $plan)
                                <tr>
                                    <td>{{ $plan->nombre }}</td>
                                    <td>{{ $plan->desayuno }}</td>
                                    <td>{{ $plan->merienda_manana }}</td>
                                    <td>{{ $plan->almuerzo }}</td>
                                    <td>{{ $plan->merienda_tarde }}</td>
                                    <td>{{ $plan->cena }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('planCRUD.show',$plan->id) }}">Show</a>
                                        <a class="btn btn-primary" href="{{ route('planCRUD.edit',$plan->id) }}">Edit</a>
                                        {!! Form::open(['method' => 'DELETE','route' => ['planCRUD.destroy', $plan->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach

                        </table>

                        {!! $planes->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection