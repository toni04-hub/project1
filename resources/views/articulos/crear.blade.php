@extends('layout')

    @section('content')
        <h1>Crea un nuevo artículo</h1>
        <form method="POST" action = {{url('articulos/store')}}>
            {{csrf_field()}}
            <input type="text" name="titulo">
            <input type="submit" name = "hola" value="Enviar">
        </form>
    @endsection