@extends('layouts.app')

@section('content')

    <h1>Editar tarea</h1>

    <form action="{{ route('tareas.update',['id'=>$tarea->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="titulo">Título: </label>
        <input type="text" id="titulo" name="titulo" value="{{ $tarea->titulo }}"/>

        <input type="submit" value="Guardar"/>
    </form>

    <a href="{{ route('tareas.index') }}">Volver</a>

@endsection