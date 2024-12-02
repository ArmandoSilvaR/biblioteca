<?php

namespace App\Http\Controllers;

use App\Models\Seccion;
use Illuminate\Http\Request;

class SeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $secciones = Seccion::all();
        return view('secciones.consulta', ['secciones' => $secciones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('secciones.alta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevaSeccion = new Seccion;
        $nuevaSeccion->nombre = $request->nombre;
        $nuevaSeccion->ubicacion = $request->ubicacion;
        $nuevaSeccion->save();
        return redirect('/seccion');
    }

    /**
     * Display the specified resource.
     */
    public function show(Seccion $seccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($seccion)
    {
        $seccionEditar = Seccion::findOrFail($seccion);
        return view('secciones.actualizacion', ['seccion' => $seccionEditar]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $seccion)
    {
        $seccionActualizar = Seccion::findOrFail($seccion);
        $seccionActualizar->nombre = $request->nombre;
        $seccionActualizar->ubicacion = $request->ubicacion;
        $seccionActualizar->save();
        return redirect('/seccion');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($seccion)
    {
        Seccion::destroy($seccion);
        return redirect('/seccion');
    }
}
