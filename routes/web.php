<?php
//
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

//DB::listen(function($query) {
   //var_dump($query->sql);
//});
App::setLocale('es');

Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');

Route::resource('portafolio', 'App\Http\Controllers\ProjectController')
    ->names('projects')
    ->parameters(['portafolio' => 'project']);

//Route::get('/portafolio', 'App\Http\Controllers\ProjectController@index')->name('projects.index');
//Route::get('/portafolio/crear', 'App\Http\Controllers\ProjectController@create')->name('projects.create');
//Route::get('/portafolio/{project}/editar', 'App\Http\Controllers\ProjectController@edit')->name('projects.edit');
//Route::patch('/portafolio/{project}', 'App\Http\Controllers\ProjectController@update')->name('projects.update');
//Route::post('/portafolio', 'App\Http\Controllers\ProjectController@store')->name('projects.store');
//Route::get('/portafolio/{project}', 'App\Http\Controllers\ProjectController@show')->name('projects.show');
//Route::delete('/portafolio/{project}', 'App\Http\Controllers\ProjectController@destroy')->name('projects.destroy');

Route::patch('portafolio/{project}/restore', 'App\Http\Controllers\ProjectController@restore')->name('projects.restore');
Route::delete('portafolio/{project}/forceDelete', 'App\Http\Controllers\ProjectController@forceDelete')->name('projects.forceDelete');


Route::get('categories/{category}', 'App\Http\Controllers\CategoryController@show')->name('categories.show');

Route::view('/contacto', 'contact')->name('contact');
Route::post('contact', 'App\Http\Controllers\MessageController@store')->name('messages.store');

Auth::routes(['register' => true]);
