<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use App\Http\Requests\StorePosts;
use App\Http\Requests\UpdatePosts;


class PostController extends Controller
{
    public function index(){

        $posts = Post::orderBy('id', 'desc')->paginate();

        //return "Bien venido a la página posts";
        return view('posts.index', compact('posts'));
    }

    public function create(){
        //return "En esta página podrás crear un post";
        return view('posts.create');
    }

    public function store(StorePosts $request){
  
        //return $request->all(); 
       /* $post = new Post();

        $post->titulo = $request->titulo;
        $post->extracto = $request->extracto;
        $post->contenido = $request->contenido;
        //$post->caducable = $request->caducable;
        //$post->comentable = $request->comentable;
        //$post->acceso = $request->acceso;

        $post->save();*/
        $post = Post::create($request->all());

        return redirect()->route('posts.show', $post);
    }

    public function show(Post $post){
        //return "Bienvenido al curso: $post";
        return view('posts.show', compact('post'));
        //return $post;
    }

    public function edit(Post $post){
        //return "Bienvenido al curso: $post";
        return view('posts.edit', compact('post'));
        //return $post;
    }

    public function update(UpdatePosts $request, Post $post){

        //return $post;
       /* $post->titulo = $request->titulo;
        $post->extracto = $request->extracto;
        $post->contenido = $request->contenido;
        //$post->caducable = $request->caducable;
        //$post->comentable = $request->comentable;
        //$post->acceso = $request->acceso;

        $post->save();*/

        $post->update($request->all());

        return redirect()->route('posts.show', $post);
    }
}
