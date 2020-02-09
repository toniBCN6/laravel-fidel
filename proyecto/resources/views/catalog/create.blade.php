@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-white">
            <div style="background-color:#212121; text-align: center; margin-top:210px;" class="card">
                <div class="card-header">{{ __('Registrar Pelicula') }}</div>

                <div class="card-body">
                    <form method="POST" action="/catalog/create">
                        @csrf

                        <div class="form-group row">
                            <div style="margin: auto;" class="col-md-6">
                                <input id="title" placeholder="{{ __('Titulo') }}" type="text" class="form-control" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">


                            <div style="margin: auto;" class="col-md-6">
                                <input id="year" placeholder="{{ __('Año de Estreno') }}" type="text" class="form-control" name="year" value="{{ old('year') }}" required autocomplete="year">
                            </div>
                        </div>

                        <div class="form-group row">


                            <div style="margin: auto;" class="col-md-6">
                                <input id="director" placeholder="{{ __('Director') }}" type="text" class="form-control" name="director" required autocomplete="director">
                            </div>
                        </div>

                        <div class="form-group row">


                            <div style="margin: auto;" class="col-md-6">
                                <input id="poster" placeholder="{{ __('Url Imagen Poster') }}" type="text" class="form-control" name="poster" required autocomplete="poster">
                            </div>
                        </div>

                        <div class="form-group row">


                            <div style="margin: auto;" class="col-md-6">
                                <input id="synopsis" placeholder="{{ __('Synopsis') }}" type="text" class="form-control" name="synopsis" required autocomplete="synopsis">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div style="margin: auto;" class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar Pelicula') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
