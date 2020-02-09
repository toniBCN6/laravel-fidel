@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-white">
            <div style="background-color:#212121; text-align: center; margin-top:210px;" class="card">
                <div class="card-header">{{ __('Error') }}</div>

                <div class="card-body">
                    No has podido acceder por {{$error}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection