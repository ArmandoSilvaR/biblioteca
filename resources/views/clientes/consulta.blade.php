@extends('layouts.app')

@section('content')
<h1>Lista de Clientes</h1>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->nombre }}</td>
            <td>{{ $cliente->apellido }}</td>
            <td>{{ $cliente->correo }}</td>
            <td>{{ $cliente->telefono }}</td>
            <td>
                <a href="{{ route('cliente.edit', $cliente->id) }}">Editar</a> |
                <form action="{{ route('cliente.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('cliente.create') }}">Crear nuevo cliente</a>
@endsection
