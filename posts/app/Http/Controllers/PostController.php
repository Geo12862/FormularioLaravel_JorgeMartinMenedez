<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        //return "Bien venido a la página posts";
        return view('posts.index');
    }

    public function create(){
        //return "En esta página podrás crear un post";
        return view('posts.create');
    }

    public function show($post){
        //return "Bienvenido al curso: $post";
        return view('posts.show', compact('post'));
    }
}
