@extends('layouts.plantilla')

@section('title', 'Posts create')
    
@section('content')

    @csrf

    <h1>En esta página podrás crear una publicación</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @if ($errors->any())
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        @endif
        <label>
            Título de la publicación:
            <br>
            <input type="text" name="titulo" value="{{ old('titulo') }}">
        </label>
        @error('titulo')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <br>
        <label>
            Extracto publicación:
            <br>
            <textarea name="extracto" rows="2">{{ old('extracto') }}</textarea>
        </label>
        @error('extracto')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <br>
        <label>
            Contenido publicación:
            <br>
            <textarea name="contenido" rows="10">{{ old('contenido') }}</textarea>
        </label>
        @error('contenido')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <br>
        <label>
            <input type="checkbox" name="caducable">Caducable
        </label>
        <br>
        <label>
            <input type="checkbox" name="caducable">Comentable
        </label>
        <br>
        <select name="acceso">
            <option value="privado">Privado</option>
            <option value="publico" selected>Público</option>
        </select>
        @error('acceso')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection
