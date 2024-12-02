@extends('layouts.app')

@section('content')
<h1>Agregar Nuevo Artículo</h1>
<form action="{{ route('articulo.store') }}" method="POST">
    @csrf
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" required>
    
    <label for="año_publicacion">Año de Publicación:</label>
    <input type="number" name="año_publicacion" required>
    
    <label for="id_autor">Autor:</label>
    <select name="id_autor">
        @foreach($autores as $autor)
        <option value="{{ $autor->id }}">{{ $autor->nombre }} {{ $autor->apellido }}</option>
        @endforeach
    </select>
    
    <label for="id_editorial">Editorial:</label>
    <select name="id_editorial">
        @foreach($editoriales as $editorial)
        <option value="{{ $editorial->id }}">{{ $editorial->nombre }}</option>
        @endforeach
    </select>
    
    <label for="id_seccion">Sección:</label>
    <select name="id_seccion">
        @foreach($secciones as $seccion)
        <option value="{{ $seccion->id }}">{{ $seccion->nombre }}</option>
        @endforeach
    </select>

    <label for="genero">Género:</label>
    <input type="text" name="genero">

    <label for="tipo">Tipo:</label>
    <input type="text" name="tipo">

    <button type="submit">Guardar</button>
</form>
<a href="{{ route('articulo.index') }}">Regresar</a>
@endsection
