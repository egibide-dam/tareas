{{-- resources/views/tareas/index.blade.php --}}

@extends('layouts.app')

@section('content')

    <h1>Tareas</h1>

    <a href="{{ route('tareas.create') }}">Nueva tarea</a>

    <ul>
        @foreach($tareas as $tarea)
            <li>
                <a href="{{ route('tareas.show',['id'=>$tarea->id]) }}">{{ $tarea->titulo }}</a>
                <a href="{{ route('tareas.edit',['id'=>$tarea->id]) }}">Editar</a>

                <form action="{{ route('tareas.destroy',['id'=>$tarea->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Borrar"/>
                </form>
            </li>
        @endforeach
    </ul>

@endsection