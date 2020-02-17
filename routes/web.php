<?php

Route::get('/', function (){
    return view('home');
});

Route::get('/usuarios', 'UserController@index');

// Route::get('/usuarios/detalles', function (){
//     return 'Mostrando el detalle del usuario'.$_GET['id'];

// });

Route::get('/usuarios/nuevo','UserController@create');

Route::get('/usuarios/{id}', 'UserController@show')->where('id', '[0-9]+');

Route::get('/usuarios/{id}/edit', 'UserController@edit')->where('id', '[0-9]+');

Route::get('/saludo/{name}/{nickname?}','WelcomeController');

Route::get('/pasteles', 'PastelController@index');

Route::get('/pasteles/{id}', 'PastelController@show')->where('id', '[0-9 ]+');
