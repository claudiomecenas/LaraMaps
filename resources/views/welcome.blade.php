@extends('layouts.layout')
 
@section('title', 'Lista de Rotas')
 
@section('sidebar')
    @parent
@endsection
 
@section('content')
    <div class="container-body p-3 text-primary-emphasis bg-light-subtle border border-primary-subtle rounded-3">
    <h2>Escolha a Rota abaixo para testar:</h2>
    <ul>
        <li><a class="text-dark" href="/map">Mapa Simples</a></li>
        <li><a class="text-dark" href="/mapbootstrap">Mapa com Layout</a></li>
    </ul>
    </div>
@endsection