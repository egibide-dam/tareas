{{-- resources/views/tareas/index.blade.php --}}

@extends('layouts.app')

@section('content')

    <h1>Detalle de una tarea</h1>

    <p>Nombre: {{ $tarea->titulo }}</p>

    <a href="{{ route('tareas.index') }}">Volver</a>

@endsection