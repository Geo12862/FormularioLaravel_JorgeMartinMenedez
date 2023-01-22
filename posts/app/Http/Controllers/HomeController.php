<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
       /* return view('welcome'); */
      //return "Bien venido a la página principal"; 
      return view('home');
    }
}
