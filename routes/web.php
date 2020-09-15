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



Route::view('/','home')->name('home');

Route::view('/about','about')->name('about');

Route::view('/contact','contact')->name('contact');

Route::get('/portafolio','portfolioController@index')->name('portafolio');
/*
Route::get('/', function () {
	$nombre ="Carlos";
    return view('home',compact('nombre'));//->with('nombre',$nombre); es igual ['nombre'=>$nombre]
})->name('home');*/

// El metodo onlu¿y crea un array con los metodos del controlador solicitados y el metodo except evita
// los metodos llamdaos
//Route::resource('projects','portfolioController')->except('index','show');

//Invocar un metodo de un controlador tipo api
//Route::resource('projects','portfolioController');