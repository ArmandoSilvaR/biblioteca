@extends('layouts.app')

@section('content')
<h1>Lista de Personal</h1>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Salario</th>
            <th>Horario</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($personales as $personal)
        <tr>
            <td>{{ $personal->id }}</td>
            <td>{{ $personal->nombre }}</td>
            <td>{{ $personal->salario }}</td>
            <td>{{ $personal->horario }}</td>
            <td>
                <a href="{{ route('personal.edit', $personal->id) }}">Editar</a> |
                <form action="{{ route('personal.destroy', $personal->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('personal.create') }}">Agregar nuevo personal</a>
@endsection
