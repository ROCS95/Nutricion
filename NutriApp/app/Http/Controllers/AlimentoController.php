<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AlimentoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pacientes = Paciente::orderBy('id','DESC')->paginate(5);
        return view('ListaAlimento.index',compact('alimentos'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }


}