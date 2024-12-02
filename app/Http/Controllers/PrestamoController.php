<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use App\Models\Cliente;
use App\Models\Articulo;
use App\Models\Personal;
use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prestamos = Prestamo::all();
        return view('prestamos.consulta', ['prestamos' => $prestamos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
        $articulos = Articulo::all();
        $personales = Personal::all();
        return view('prestamos.alta', [
            'clientes' => $clientes,
            'articulos' => $articulos,
            'personales' => $personales,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
        $nuevoPrestamo = new Prestamo;
        $nuevoPrestamo->id_cliente = $request->id_cliente;
        $nuevoPrestamo->id_articulo = $request->id_articulo;
        $nuevoPrestamo->id_personal = $request->id_personal;
        $nuevoPrestamo->fecha_prestamo = $request->fecha_prestamo;
        $nuevoPrestamo->fecha_devolucion = $request->fecha_devolucion;
        $nuevoPrestamo->save();
    
        return redirect('/prestamo');
    } catch (\Exception $e) {
        return redirect('/prestamo')->with('error', 'Ocurrió un error al registrar el préstamo: ' . $e->getMessage());
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(Prestamo $prestamo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($prestamo)
    {
        $prestamoEditar = Prestamo::findOrFail($prestamo);
        $clientes = Cliente::all();
        $articulos = Articulo::all();
        $personales = Personal::all();
        return view('prestamos.actualizacion', [
            'prestamo' => $prestamoEditar,
            'clientes' => $clientes,
            'articulos' => $articulos,
            'personales' => $personales,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $prestamo)
    {
        $prestamoActualizar = Prestamo::findOrFail($prestamo);
        $prestamoActualizar->id_cliente = $request->id_cliente;
        $prestamoActualizar->id_articulo = $request->id_articulo;
        $prestamoActualizar->id_personal = $request->id_personal;
        $prestamoActualizar->fecha_prestamo = $request->fecha_prestamo;
        $prestamoActualizar->fecha_devolucion = $request->fecha_devolucion;
        $prestamoActualizar->save();
        return redirect('/prestamo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($prestamo)
    {
        Prestamo::destroy($prestamo);
        return redirect('/prestamo');
    }
}
