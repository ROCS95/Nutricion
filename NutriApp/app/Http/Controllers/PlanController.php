<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;

use App\Http\Requests;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $planes = Plan::orderBy('id','DESC')->paginate(5);
        return view('PlanCRUD.index',compact('planes'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('PlanCRUD.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'desayuno' => 'required',
            'merienda_manana' => 'required',
            'almuerzo' => 'required',
            'merienda_tarde' => 'required',
            'cena' => 'required',

        ]);
        Plan::create($request->all());
        return redirect()->route('planCRUD.index')
            ->with('success','Plan created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plan = Plan::find($id);
        return view('PlanCRUD.show',compact('plan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plan = Plan::find($id);
        return view('PlanCRUD.edit',compact('plan'));
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
        $this->validate($request, [
            'desayuno' => 'required',
            'merienda_manana' => 'required',
            'almuerzo' => 'required',
            'merienda_tarde' => 'required',
            'cena' => 'required',

        ]);
        Plan::find($id)->update($request->all());
        return redirect()->route('planCRUD.index')
            ->with('success','Plan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Plan::find($id)->delete();
        return redirect()->route('planCRUD.index')
            ->with('success','Plan deleted successfully');
    }
}
