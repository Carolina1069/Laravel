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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/', function () {
    return "Hola bienvenido a mi sitio";
});*/

/*(Route::get('saludo/{nombre}', function ($nombre) {
    return "Saludos ".$nombre;
});*/

/*Route::get('saludo/{nombre?}', function ($nombre = "Invitado") {
    return "Saludos ".$nombre;
});*/

/*Route::get('/Contacto', function () {
    return "Seccion de contactos";
})->name('Contactos');

Route :: get('/',function()
{
    echo "<a href =". route('Contacto').">Contacto 1</a><br>";
    echo "<a href = 'Contacto'>Contacto 2</a><br>";
    echo "<a href = 'Contacto'>Contacto 3</a><br>";
});*/


Route::get ('/', function(){
    return view ('home');
})->name('home');




