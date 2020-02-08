@extends('layouts.master')

@section('content')

    <div class="row mt-5">
        @foreach( $arrayPeliculas as $key => $pelicula )

            <div class="col-xs-6 col-sm-4 col-md-3 text-center">
                <div class="card mt-5">
                    <a href="{{ url('/catalog/show/' . $key ) }}">
                        <img src="{{$pelicula['poster']}}" style="height:200px; padding:15px;"/>
                        <h5 style="min-height:45px;margin:5px 0 10px 0; color: black;">
                        {{$pelicula['title']}}
                        </h5>
                    </a>
                </div>
            </div>

        @endforeach
        <div style="margin-bottom:150px;">&nbsp</div>
    </div>

@stop