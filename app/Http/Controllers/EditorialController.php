<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use Illuminate\Http\Request;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $editoriales = Editorial::all();
        return view('editoriales.consulta', ['editoriales' => $editoriales]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('editoriales.alta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevaEditorial = new Editorial;
        $nuevaEditorial->nombre = $request->nombre;
        $nuevaEditorial->direccion = $request->direccion;
        $nuevaEditorial->telefono = $request->telefono;
        $nuevaEditorial->save();
        return redirect('/editorial');
    }

    /**
     * Display the specified resource.
     */
    public function show(Editorial $editorial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($editorial)
    {
        $editorialEditar = Editorial::findOrFail($editorial);
        return view('editoriales.actualizacion', ['editorial' => $editorialEditar]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $editorial)
    {
        $editorialActualizar = Editorial::findOrFail($editorial);
        $editorialActualizar->nombre = $request->nombre;
        $editorialActualizar->direccion = $request->direccion;
        $editorialActualizar->telefono = $request->telefono;
        $editorialActualizar->save();
        return redirect('/editorial');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($editorial)
    {
        Editorial::destroy($editorial);
        return redirect('/editorial');
    }
}
