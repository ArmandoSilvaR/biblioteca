@extends('layouts.app')

@section('content')
<h1>Lista de Artículos</h1>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Año de Publicación</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articulos as $articulo)
        <tr>
            <td>{{ $articulo->id }}</td>
            <td>{{ $articulo->titulo }}</td>
            <td>{{ $articulo->año_publicacion }}</td>
            <td>
                <a href="{{ route('articulo.edit', $articulo->id) }}">Editar</a> |
                <form action="{{ route('articulo.destroy', $articulo->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('articulo.create') }}">Crear nuevo artículo</a>
@endsection
