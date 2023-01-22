@extends('layouts.plantilla')

@section('title', 'Posts ' . $post)
    
@section('content')
    <h1>Bienvenido al post: {{ $post }}</h1>
@endsection
