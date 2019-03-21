@extends('layouts.app')

@section('content')

    <h1>Nueva tarea</h1>

    <form action="{{ route('tareas.store') }}" method="POST">
        @csrf

        <label for="titulo">Título: </label>
        <input type="text" id="titulo" name="titulo"/>

        <input type="submit" value="Guardar"/>
    </form>

@endsection