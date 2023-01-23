@extends('layouts.plantilla')

@section('title', 'Posts edit')
    
@section('content')

    <h1>En esta página podrás editar una publicación</h1>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('posts.index') }}">Volver a posts</a>
    <br>
    <form action="{{ route('posts.update', $post) }}" method="POST">

        @csrf

        @method('put')

        @if ($errors->any())
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        @endif

        <label>
            Título de la publicación:
            <br>
            <input type="text" name="titulo" value="{{ old('titulo', $post->titulo) }}">
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
            <textarea name="extracto" rows="2">{{ old('extracto', $post->extracto) }}</textarea>
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
            <textarea name="contenido" rows="10">{{ old('contenido', $post->contenido) }}</textarea>
        </label>
        @error('contenido')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <br>
        <label>
            <input type="checkbox" name="caducable" value="caducable" @checked(old('caducable', $post->caducable))>Caducable
        </label>
        <br>
        <label>
            <input type="checkbox" name="comentable" value="comentable" @checked(old('comentable', $post->comentable))>Comentable
        </label>
        <br>
        <select name="acceso">
            <option value="privado">Privado</option>
            <option value="publico" selected>Público</option>
        </select>
       
        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection