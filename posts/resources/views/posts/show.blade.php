@extends('layouts.plantilla')

@section('title', 'Posts ' . $post->titulo)
    
@section('content')
    <h1>Bienvenido al post: {{ $post->titulo }}</h1>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('posts.index') }}">Volver a posts</a>
    <br>
    <a href="{{ route('posts.edit', $post) }}">Editar Post</a>

    <p><strong>Extracto publicación: </strong>{{ $post->extracto }}</p>
    <p>{{ $post->contenido }}</p>
@endsection
