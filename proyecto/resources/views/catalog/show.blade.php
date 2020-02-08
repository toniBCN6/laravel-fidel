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
                @if ($pelicula['rented'] == true) <p>Estado: <span class="text-success">Disponible</span></p>
                @else <p>Estado: <span class="text-danger">Alquilado</span></p>
                
                @endif
                <p><button class="btn col-sm-4 mr-3 btn-success">Alquilar</button>
                <button class="btn col-sm-4 btn-danger">Devolver</button></p>
            
            </div>

    </div>
    <div style="margin-top:181px;">&nbsp</div>

@stop

