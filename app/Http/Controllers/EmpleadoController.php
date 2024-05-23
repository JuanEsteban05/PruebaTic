<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados=Empleado::all();
        return view('empleado.index',\compact('empleados'));
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
        $empleados = new Empleado;
        $empleados->nombre_emp=$request->input('nombre_emp');
        $empleados->apellido_emp=$request->input('apellido_emp');
        $empleados->cargo_emp=$request->input('cargo_emp');
        $empleados->telefono_emp=$request->input('telefono_emp');
        $empleados->id_departamento=$request->input('id_departamento');
        $empleados->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_empleado)
    {
        $empleados=Empleado::find($id_empleado);
        return view('empleado.modal-info',compact('empleados'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_empleado)
    {
        $empleados=Empleado::find($id_empleado);
        $empleados->nombre_emp=$request->input('nombre_emp');
        $empleados->apellido_emp=$request->input('apellido_emp');
        $empleados->cargo_emp=$request->input('cargo_emp');
        $empleados->telefono_emp=$request->input('telefono_emp');
        $empleados->id_departamento=$request->input('id_departamento');
        $empleados->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_empleado)
    {
        $empleados=Empleado::find($id_empleado);
        $empleados->delete();
        return redirect()->back();
    }
}
