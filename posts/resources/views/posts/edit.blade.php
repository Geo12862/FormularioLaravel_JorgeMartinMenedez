@extends('layouts.plantilla')

@section('title', 'Posts edit')
    
@section('content')

    <h1>En esta página podrás editar una publicación</h1>
    <form action="{{ route('posts.update', $post) }}" method="POST">

        @csrf

        @method('put')
        
        <label>
            Título de la publicación:
            <br>
            <input type="text" name="titulo" value="{{ $post->titulo }}">
        </label>

        <br>
        <label>
            Extracto publicación:
            <br>
            <textarea name="extracto" rows="2">{{ $post->extracto }}</textarea>
        </label>

        <br>
        <label>
            Contenido publicación:
            <br>
            <textarea name="contenido" rows="10">{{ $post->contenido }}</textarea>
        </label>

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
        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection