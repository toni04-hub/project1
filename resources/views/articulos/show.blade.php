@extends('layout')

    @section('content')
        <h1>Detalle del Articulo {{$articulo->id }}</h1>
        <p> {{$articulo->body}} </p>
        <a href={{url()->previous()}}>Volver</a>
    @endsection
