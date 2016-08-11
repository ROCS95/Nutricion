<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Paciente as paciente;
use App\Plan as plan;
use App\PlanPaciente as planpaciente;
class PlanPacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $planes_pacientes = Plan::orderBy('id','DESC')->paginate(5);
        return view('asignar.index',compact('planes_pacientes'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paciente = new paciente();
        $paciente = $paciente->getNombreGetIdPaciente();
        $plan = new plan();
        $plan = $plan->getNombreGetIdPaciente();
        return view('Asignar.create')->with(['pacienteList'=>$paciente, 'planList'=>$plan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = new planpaciente();
        $response->id_paciente = intval($request['id_paciente']);
        $response->id_plan = intval($request['id_plan']);

        $response->save();
        return redirect()->route('pacienteCRUD.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
