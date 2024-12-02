<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personales = Personal::all();
        return view('personales.consulta', ['personales' => $personales]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('personales.alta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevoPersonal = new Personal;
        $nuevoPersonal->nombre = $request->nombre;
        $nuevoPersonal->salario = $request->salario;
        $nuevoPersonal->horario = $request->horario;
        $nuevoPersonal->save();
        return redirect('/personal');
    }

    /**
     * Display the specified resource.
     */
    public function show(Personal $personal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($personal)
    {
        $personalEditar = Personal::findOrFail($personal);
        return view('personales.actualizacion', ['personal' => $personalEditar]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $personal)
    {
        $personalActualizar = Personal::findOrFail($personal);
        $personalActualizar->nombre = $request->nombre;
        $personalActualizar->salario = $request->salario;
        $personalActualizar->horario = $request->horario;
        $personalActualizar->save();
        return redirect('/personal');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($personal)
    {
        Personal::destroy($personal);
        return redirect('/personal');
    }
}