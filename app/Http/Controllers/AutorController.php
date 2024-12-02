<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autores = Autor::all();
        return view('autores.consulta', ['autores' => $autores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('autores.alta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevoAutor = new Autor;
        $nuevoAutor->nombre = $request->nombre;
        $nuevoAutor->apellido = $request->apellido;
        $nuevoAutor->fecha_nacimiento = $request->fecha_nacimiento;
        $nuevoAutor->save();
        return redirect('/autor');
    }

    /**
     * Display the specified resource.
     */
    public function show(Autor $autor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($autor)
    {
        $autorEditar = Autor::findOrFail($autor);
        return view('autores.actualizacion', ['autor' => $autorEditar]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $autor)
    {
        $autorActualizar = Autor::findOrFail($autor);
        $autorActualizar->nombre = $request->nombre;
        $autorActualizar->apellido = $request->apellido;
        $autorActualizar->fecha_nacimiento = $request->fecha_nacimiento;
        $autorActualizar->save();
        return redirect('/autor');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($autor)
    {
        Autor::destroy($autor);
        return redirect('/autor');
    }
}
