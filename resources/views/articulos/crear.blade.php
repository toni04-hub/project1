@extends('layout')

    @section('content')
        <h1>Crea un nuevo artículo</h1>
        
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action = {{url('articulos/store')}}>
            {{csrf_field()}}
            <label for="autor">Autor</label><br>
            <input type="text" name=autor id="autor" value={{old('autor')}}><br>

            <label for="title">Título</label><br>
            <input type="text" name="title" id="title" value={{old('title')}}><br>

            <label for="body">Contenido</label><br>
            <textarea rows="10" cols="50" name="body" id="body" >{{old('body', 'deefecasdcscto')}}</textarea><br>

            <input type="submit"  value="Enviar">
        </form>
    @endsection