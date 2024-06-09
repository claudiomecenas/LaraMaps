 
@extends('layouts.layout')
 
@section('title', 'Mapa com Bootstrap')
 
@section('sidebar')
    @parent
@endsection
 
@section('content')
    <div class="container-body">
        <h1 class="text-center">Parque Ibirapuera</h1>
        <div id="map"></div>
        <div style="padding-top: 10px">
            <a class="voltar btn btn-light btn-sm" href="/">Voltar</a>
        </div>
    </div> 
@endsection