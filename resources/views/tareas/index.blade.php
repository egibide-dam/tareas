{{-- resources/views/tareas/index.blade.php --}}

@extends('layouts.app')

@section('content')

    <h1>Tareas</h1>

    <a href="{{ route('tareas.create') }}">Nueva tarea</a>

    <ul>
        @foreach($tareas as $tarea)
            <li>{{ $tarea->titulo }}</li>
        @endforeach
    </ul>

@endsection