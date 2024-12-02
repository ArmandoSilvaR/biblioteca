@extends('layouts.app')

@section('content')
<h1>Editar Artículo</h1>
<form action="{{ route('articulo.update', $articulo->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" value="{{ $articulo->titulo }}" required>

    <label for="año_publicacion">Año de Publicación:</label>
    <input type="number" name="año_publicacion" value="{{ $articulo->año_publicacion }}" required>

    <label for="id_autor">Autor:</label>
    <select name="id_autor">
        @foreach($autores as $autor)
        <option value="{{ $autor->id }}" {{ $autor->id == $articulo->id_autor ? 'selected' : '' }}>
            {{ $autor->nombre }} {{ $autor->apellido }}
        </option>
        @endforeach
    </select>

    <label for="id_editorial">Editorial:</label>
    <select name="id_editorial">
        @foreach($editoriales as $editorial)
        <option value="{{ $editorial->id }}" {{ $editorial->id == $articulo->id_editorial ? 'selected' : '' }}>
            {{ $editorial->nombre }}
        </option>
        @endforeach
    </select>

    <label for="id_seccion">Sección:</label>
    <select name="id_seccion">
        @foreach($secciones as $seccion)
        <option value="{{ $seccion->id }}" {{ $seccion->id == $articulo->id_seccion ? 'selected' : '' }}>
            {{ $seccion->nombre }}
        </option>
        @endforeach
    </select>

    <label for="genero">Género:</label>
    <input type="text" name="genero" value="{{ $articulo->genero }}">

    <label for="tipo">Tipo:</label>
    <input type="text" name="tipo" value="{{ $articulo->tipo }}">

    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('articulo.index') }}">Regresar</a>
@endsection
