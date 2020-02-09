<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


// use Illuminate\Http\Request;
use App\Movie;
use Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Builder;

class CatalogController extends Controller
{


    public function getIndex(){
        if (Auth::check()){
            $peliculas=Movie::all();
            return view('catalog.index', array('arrayPeliculas'=>$peliculas));}
        else {
            return Redirect::to('login');
        }
    }

    public function getShow($id){
        if (Auth::check()){
            $peliculas=Movie::all();
            return view('catalog.show', array('pelicula'=>$peliculas[$id]));}
        else {
            return Redirect::to('login');
        }
    }

    public function getCreate(){
        if (Auth::check()){
            if (Auth::user()->is_admin){
                return view('catalog.create');
            }
            else {
                return view('error', array('error'=>'privilegios insuficientes'));
            }
        }
        else {
            return Redirect::to('login');
        }
    }

    public function getEdit($id){
        if (Auth::check()){
            if (Auth::user()->is_admin){
                $peliculas=Movie::all();
                return view('catalog.edit', array('pelicula'=>$peliculas[$id]));
            }
            else {
                return view('error', array('error'=>'privilegios insuficientes'));
            }
        }
        else {
            return Redirect::to('login');
        }
    }

    protected function create()
    {
        if (Auth::check()){
            if (Auth::user()->is_admin){
                $p = new Movie;
                $p->title = Request::input('title');
                $p->year = Request::input('year');
                $p->director = Request::input('director');
                $p->poster = Request::input('poster');
                $p->rented = true;
                $p->synopsis = Request::input('synopsis');
                $p->save();
                return Redirect::to('catalog');
            }
            else {
                return view('error', array('error'=>'privilegios insuficientes'));
            }
        }
        else {
            return Redirect::to('login');
        }
    }

    function putRent(Request $request,$id) {
        Movie::find($id)->update([
            'rented' => 0]);
        return back();
    }

    function putReturn(Request $request, $id) {
        Movie::find($id)->update([
            'rented' => 1]);
        return back();
    }

    function PostEdit(Request $request, $id) {
        $title = Request::input('title');
        $year = Request::input('year');
        $director = Request::input('director');
        $synopsis = Request::input('synopsis');
        DB::update('update movies set title=?,year=?,director=?,synopsis=? where id = ?',[$title,$year,$director,$synopsis,$id]);
        return Redirect::to('catalog');
    }

}
