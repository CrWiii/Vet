<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('ListarUsuarios','UsuarioController@inicio');
Route::get('CrearUsuario','UsuarioController@crear');
Route::post('RegistrarUsuario','UsuarioController@registrar');
Route::get('EditarUsuario/{id}','UsuarioController@editar');
Route::post('ActualizarUsuario/{id}','UsuarioController@actualizar');
Route::get('EliminarUsuario/{id}','UsuarioController@eliminar');
Route::get('HabilitarUsuario/{id}','UsuarioController@activar');
Route::get('DeshabilitarUsuario/{id}','UsuarioController@desactivar');

