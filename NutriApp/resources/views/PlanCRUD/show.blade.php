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
                                    <h2>Plan</h2>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-primary" href="{{ route('planCRUD.index') }}"> Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Desayuno:</strong>
                                   <textarea type="text"class="form-control" readonly>{{ $plan->desayuno }}</textarea>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Merienda mañana:</strong>
                                    <textarea type="text"class="form-control" readonly>{{ $plan->merienda_manana }}</textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Almuerzo:</strong>
                                    <textarea type="text"class="form-control"readonly>{{ $plan->almuerzo }}</textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Merienda tarde:</strong>
                                    <textarea type="text"class="form-control"readonly>{{ $plan->merienda_tarde }}</textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Cena:</strong>
                                    <textarea type="text"class="form-control"readonly>{{ $plan->cena }}</textarea>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>

        </div>
</div>
@endsection