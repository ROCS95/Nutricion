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
                                    <h1>Plan</h1>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-primary" href="{{ route('planCRUD.index') }}"> Atras</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <h3> <strong>Nombre:</strong></h3>
                                    <h4><p>{{ $plan->nombre }}</p></h4>
                                    </br>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <div class="form-group">
                                    <h3><strong>Desayuno:</strong></h3>
                                    <h4><p>{{ $plan->desayuno }}</p></h4>
                                    </br>
                                </div>
                            </div>
                            <div class="col-xs-4 col-md-4">
                                <div class="form-group">
                                    <h3><strong>Merienda mañana:</strong></h3>
                                    <h4><p>{{ $plan->merienda_manana }}</p></h4>
                                    </br>
                                </div>

                            </div>

                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <h3><strong>Almuerzo :</strong></h3>
                                    <h4><p>{{ $plan->almuerzo }}</p></h4>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <div class="form-group">
                                    <h3><strong>Merienda tarde:</strong></h3>
                                    <h4><p>{{ $plan->merienda_tarde }}</p></h4>
                                </div>
                            </div>
                            <div class="col-xs-4 col-md-4">
                                <div class="form-group">
                                    <h3><strong> Cena:</strong></h3>
                                    <h4><p>{{ $plan->cena }}</p></h4>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>

        </div>
</div>
@endsection