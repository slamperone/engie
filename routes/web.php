<?php

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

Route::get('/', 'RegistroController@index');


Route::get('/bases', function () {
    return view('bases');
});

Route::get('/instrucciones', function () {
    return view('inst');
});

Route::get('/premios', function () {
    return view('premios');
});

Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/concurso', function () {
    return view('concurso');
});

Route::get('/aviso-de-privacidad', function () {
    return view('aviso');
});

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});


Route::post('/registroNuevo', 'RegistroController@store');
