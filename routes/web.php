<?php

use App\Http\Controllers\PortController;
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

/*
Route::get('/contacto', function () {
    return "Seccion de contactos";
})->name('Contacto');

Route::get('/',function(){
    echo "<a href=". route('Contacto')."> Contacto #1</a><br>";
    echo "<a href='contacto'> Contacto #2</a><br>";
    echo "<a href='contacto'> Contacto #3</a><br>";
});*/


/*
Route::get ('/', function(){
    $nombre="Carolina";
    return view ('home');
})->name('home');*/

/*Route::view('/', 'home');*/

/*$portafolio = [
    ['title'=>'Proyecto #1'],
    ['title'=>'Proyecto #2'],
    ['title'=>'Proyecto #3'],
    ['title'=>'Proyecto #4'],
];
*/

Route:: view('/', 'Home')->name('Home');
Route:: view('/acerca', 'acerca')->name('acerca');

//Route:: view('/portafolio', 'portafolio', compact('portafolio'))->name('portafolio');
Route:: get('/portafolio','PortController@index')->name('portafolio');

//Route:: get('/portafolio/{id} ','PortController@show')->name('portafolio.show');

Route::get('/portafolio/crear','PortController@create')->name('portafolio.create');

Route::post('/portafolio', 'PortController@store')->name('portafolio.store');


Route:: get('/portafolio/{project} ','PortController@show')->name('portafolio.show');


Route:: view('/Contacto', 'Contacto')->name('Contacto');

Route::post('Contacto',('messController@store'))->name('Contac');


