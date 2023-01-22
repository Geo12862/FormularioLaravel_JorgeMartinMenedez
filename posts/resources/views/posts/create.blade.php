@extends('layouts.plantilla')

@section('title', 'Posts create')
    
@section('content')

    @csrf

    <h1>En esta página podrás crear una publicación</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        <label>
            Título de la publicación:
            <br>
            <input type="text" name="titulo">
        </label>

        <br>
        <label>
            Extracto publicación:
            <br>
            <textarea name="extracto" rows="2"></textarea>
        </label>

        <br>
        <label>
            Contenido publicación:
            <br>
            <textarea name="contenido" rows="10"></textarea>
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
        <button type="submit">Enviar formulario</button>
    </form>
@endsection
