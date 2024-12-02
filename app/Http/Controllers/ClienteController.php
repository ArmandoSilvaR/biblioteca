<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.consulta', ['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.alta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevoCliente = new Cliente;
        $nuevoCliente->nombre = $request->nombre;
        $nuevoCliente->apellido = $request->apellido;
        $nuevoCliente->correo = $request->correo;
        $nuevoCliente->telefono = $request->telefono;
        $nuevoCliente->save();
        return redirect('/cliente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($cliente)
    {
        $clienteEditar = Cliente::findOrFail($cliente);
        return view('clientes.actualizacion', ['cliente' => $clienteEditar]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $cliente)
    {
        $clienteActualizar = Cliente::findOrFail($cliente);
        $clienteActualizar->nombre = $request->nombre;
        $clienteActualizar->apellido = $request->apellido;
        $clienteActualizar->correo = $request->correo;
        $clienteActualizar->telefono = $request->telefono;
        $clienteActualizar->save();
        return redirect('/cliente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($cliente)
    {
        Cliente::destroy($cliente);
        return redirect('/cliente');
    }
}
