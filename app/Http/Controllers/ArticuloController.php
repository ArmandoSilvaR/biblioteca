<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Autor;
use App\Models\Editorial;
use App\Models\Seccion;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articulos = Articulo::all();
        return view('articulos.consulta', ['articulos' => $articulos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $autores = Autor::all();
        $editoriales = Editorial::all();
        $secciones = Seccion::all();
        return view('articulos.alta', [
            'autores' => $autores,
            'editoriales' => $editoriales,
            'secciones' => $secciones,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevoArticulo = new Articulo;
        $nuevoArticulo->titulo = $request->titulo;
        $nuevoArticulo->año_publicacion = $request->año_publicacion;
        $nuevoArticulo->id_autor = $request->id_autor;
        $nuevoArticulo->id_editorial = $request->id_editorial;
        $nuevoArticulo->id_seccion = $request->id_seccion;
        $nuevoArticulo->genero = $request->genero;
        $nuevoArticulo->tipo = $request->tipo;
        $nuevoArticulo->save();
        return redirect('/articulo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Articulo $articulo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($articulo)
    {
        $articuloEditar = Articulo::findOrFail($articulo);
        $autores = Autor::all();
        $editoriales = Editorial::all();
        $secciones = Seccion::all();
        return view('articulos.actualizacion', [
            'articulo' => $articuloEditar,
            'autores' => $autores,
            'editoriales' => $editoriales,
            'secciones' => $secciones,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $articulo)
    {
        $articuloActualizar = Articulo::findOrFail($articulo);
        $articuloActualizar->titulo = $request->titulo;
        $articuloActualizar->año_publicacion = $request->año_publicacion;
        $articuloActualizar->id_autor = $request->id_autor;
        $articuloActualizar->id_editorial = $request->id_editorial;
        $articuloActualizar->id_seccion = $request->id_seccion;
        $articuloActualizar->genero = $request->genero;
        $articuloActualizar->tipo = $request->tipo;
        $articuloActualizar->save();
        return redirect('/articulo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($articulo)
    {
        Articulo::destroy($articulo);
        return redirect('/articulo');
    }
}
