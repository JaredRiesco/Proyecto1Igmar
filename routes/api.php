<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('usuarioRegistro/{nombres?}/{apellidos?}/{edad?}/{sexo?}','usuarioss@index')
->where([
    'nombres'=>'[A-Z,a-z]+',
    'apellidos'=>'[A-Z,a-z]+',
    'edad'=>'[0-9]+',
    'sexo'=>'[A-Z,a-z]+']);

    Route::get('usuariosMuestra/{id?}','usuarioss@show')->where('id','[0-9]+')->name('usuarioRuta');

    Route::delete('usuarioDelete/{id?}','usuarioss@delete');

    Route::put('usuarioUpdate/{id}/{nombres}', 'usuarioss@updateNombre')->where(['id','[0-9]+',
    'nombre','[A-z]+']);

    Route::get('publicacionRegistro/{titulo?}/{cuerpo?}/{usuario_id?}','publicacioness@index')
->where([
'titulo'=>'[A-Z,a-z]+',
'cuerpo'=>'[A-Z,a-z]+',
'usuario_id'=>'[0-9]+']);

Route::get('publicacionMuestra/{id?}', 'publicacioness@show')->where('id','[0-9]+')->name('publicacionRuta');

Route::delete('publicacionDelete/{id?}','publicacioness@delete');

Route::put('publicacionUpdate/{id}/{titulo}/{cuerpo}', 'publicacioness@updatePublicacion')->where(['id','[0-9]+',
'titulo','[A-z]+','cuerpo','[A-z]+']);

Route::get('comentarioRegistro/{titulo?}/{cuerpo?}/{publicacion_id?}','comentarioss@index')
->where([
'titulo'=>'[A-Z,a-z]+',
'cuerpo'=>'[A-Z,a-z]+',
'publicacion_id'=>'[0-9]+']);

Route::get('comentariosMuestra/{id?}', 'comentarioss@show')->where('id','[0-9]+')->name('comentariosRuta');

Route::delete('comentarioDelete/{id?}','comentarioss@delete');

Route::put('comentarioUpdate/{id}/{titulo}/{cuerpo}', 'comentarioss@updateComentarios')->where(['id','[0-9]+',
'titulo','[A-z]+',
'cuerpo','[A-z]+']);
