@extends('layouts.master')

@section('content')

    <div class="row mt-5">


            <div class="col-sm-4">
                <img src="{{$pelicula['poster']}}" style="height:500px"/>
            </div>

            <div class="col-sm-8 text-white">
                <h4 style="min-height:45px;margin:5px 0 10px 0">
                    {{$pelicula['title']}}
                </h4>
                <p>Año: {{$pelicula['year']}}</p>
                <p>Director: {{$pelicula['director']}}</p>
                <p>Sinopsis:</p>
                <p>{{$pelicula['synopsis']}}</p>
                
                @if ($pelicula['rented'] == true)
                <p>Estado: <span class="text-success">Disponible</span></p>
                <form method="POST" action="/catalog/rent/<?php echo $pelicula['id'];?>">
                @csrf
                    <input type="hidden" name="id" id="id" value="{{$pelicula['id']}}">
                    <p><button name="alquilar" id="alquilar" class="btn col-sm-4 mr-3 btn-success">Alquilar</button>
                </form>
                @else
                <p>Estado: <span class="text-danger">Alquilado</span></p>
                <form method="POST" action="/catalog/unrent/<?php echo $pelicula['id'];?>">
                @csrf
                    <input type="hidden" name="id" id="id" value="{{$pelicula['id']}}">
                    <button name="devolver" id="devolver" class="btn col-sm-4 btn-danger">Devolver</button></p>
                </form>
                @endif
                @if (Auth::user()->is_admin)
                <form method="get" action="/edit/{{Request::path()}}">
                    <button class="btn col-sm-4 btn-primary">Editar</button></p>
                </form>
                @endif
                
                
            
            </div>

    </div>

@stop

