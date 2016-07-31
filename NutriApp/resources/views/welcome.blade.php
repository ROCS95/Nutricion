@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">

                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Paciente
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Nuevo</a></li>
                        <li><a href="#">Ver todos</a></li>
                    </ul>
                </div>
            </div>
                <div>
                    <table class="table table-condensed">


                        <!-- On cells (`td` or `th`) -->
                        <tr>
                            <td class="active">Nombre</td>
                            <td class="success">Apellido</td>
                            <td class="warning">Cedula</td>
                            <td class="danger">Otra</td>
                            <td class="info">Algo más</td>
                            <td class="active">Algo más 2</td>
                        </tr>
                        <tr>
                            <td class="active">Nombre</td>
                            <td class="success">Apellido</td>
                            <td class="warning">Cedula</td>
                            <td class="danger">Otra</td>
                            <td class="info">Algo más</td>
                            <td class="active">Algo más 2</td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
