<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Movie;

class CatalogController extends Controller
{
    

    public function getIndex(){
        $peliculas=Movie::all();
        return view('catalog.index', array('arrayPeliculas'=>$peliculas));
    }

    public function getShow($id){
        $peliculas=Movie::all();
        return view('catalog.show', array('pelicula'=>$peliculas[$id]));
    }

    public function getCreate(){
        return view('catalog.create');
    }

    public function getEdit(){
        return view('catalog.edit', array('id'=>$id));
    }
}
