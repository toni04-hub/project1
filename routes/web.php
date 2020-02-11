<?php

Route::get('/', function (){
    return 'Home';
});

Route::get('/usuarios', function(){
    return 'Usuarios';
});

// Route::get('/usuarios/detalles', function (){
//     return 'Mostrando el detalle del usuario'.$_GET['id'];

// });

Route::get('/usuarios/nuevo', function (){
    return 'Crear un Nuevo Ususario';
});

Route::get('/usuarios/{id}', function ($id){
    return 'Mostrando el detalle del usuario '.$id;

})->where('id', '[0-9]+');

Route::get('/saludo/{name}/{nickname?}', function ($name, $nickname = null){
    if($nickname) {
        return "Bienvenido {$name}, tu apodo es {$nickname}";
    }else{
        return "Bienvenido {$name}, No tienes Apodo";
    }
});

