@extends('layouts.master')

@section('content')

    <div class="row mt-5">


            <div class="col-sm-4">
                <img src="{{$pelicula['poster']}}" style="height:500px"/>
            </div>

            <div class="col-sm-8 text-white">
            <form method="POST" action="/catalog/editar/<?php echo $pelicula['id'];?>">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$pelicula['id']}}">
            <div class="form-group row">
                <h4 style="min-height:45px;margin:5px 0 10px 0">
                   <input class="form-control" type="text" name="title" id="title" value="{{$pelicula['title']}}">
                </h4>
            </div>
            <div class="form-group row">
                <p>Año: <input class="form-control" type="text" name="year" id="year" value="{{$pelicula['year']}}"> </p>
            </div>
            <div class="form-group row">
                <p>Director: <input class="form-control" type="text" name="director" id="director" value="{{$pelicula['director']}}"></p>
            </div>
            <div class="form-group row">
                <p>Sinopsis:    
                <input style="width:800px; text-align:justify" class="form-control" type="text" name="synopsis" id="synopsis" value="{{$pelicula['synopsis']}}"></p>
            </div>
                @if ($pelicula['rented'] == true)
                <p>Estado: <span class="text-success">Disponible</span></p>
                @else
                <p>Estado: <span class="text-danger">Alquilado</span></p>
                @endif
                <button class="btn btn-primary col-sm-4">Guardar Cambios</button>
            </form>
                
                
            
            </div>

    </div>

@stop