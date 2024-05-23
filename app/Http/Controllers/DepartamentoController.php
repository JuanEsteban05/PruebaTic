<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departamentos=Departamento::all();
        return view('departamento.index-d',\compact('departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $departamentos = new Departamento;
        $departamentos->nombre_dep=$request->input('nombre_dep');
        $departamentos->descripcion_dep=$request->input('descripcion_dep');
        $departamentos->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Departamento $departamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departamento $id_departamento)
    {
        $departamentos=Departamento::find($id_departamento);
        return view('departamento.modal-info-d',compact('departamento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_departamento)
    {
        $departamentos=Departamento::find($id_departamento);
        $departamentos->nombre_dep=$request->input('nombre_dep');
        $departamentos->descripcion_dep=$request->input('descripcion_dep');
        $departamentos->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_departamento)
    {
        $departamentos=Departamento::find($id_departamento);
        $departamentos->delete();
        return redirect()->back();
    }
}
