@extends('layouts.plantilla')

@section('title', 'Home')
    
@section('content')
    <h1>Bien venido a la página principal</h1>
    <a href="{{ route('posts.index') }}">Posts</a>
@endsection
