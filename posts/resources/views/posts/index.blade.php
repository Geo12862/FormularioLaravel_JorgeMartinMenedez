@extends('layouts.plantilla')

@section('title', 'Posts')
    
@section('content')
    <h1>Bien venido a la página posts</h1>
    <a href="{{ route('posts.create') }}">Crear Post</a>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->titulo }}</a>
            </li>
        @endforeach
    </ul>

    {{ $posts->links() }}
@endsection
