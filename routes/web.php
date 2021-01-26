<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('notas', function(){
    return 'App de notas';
});

Route::get('notas/crear', function(){
    return 'Aquí se CREAN las notas';
});

Route::get('notas/listar', function(){
    return 'Aquí se LISTA una nota';
});


Route::get('notas/{id}/editar', function($id){
    return 'Aquí se EDITA la nota con id: ' .$id;
});
