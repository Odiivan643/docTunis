<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');

// Afficher le formulaire d'inscription
Route::get('/inscription', [UserController::class , 'inscription'])->middleware('guest')->name('inscription');
// Valider le formulaire
Route::post('/inscription/save', [UserController::class , 'store'])->name('inscription.save');
// Afficher le formulaire de connexion
Route::get('/connexion' , [UserController::class , 'connexion'])->middleware('guest')->name('connexion') ;
// Sert a connecter l'utilisateur
Route::post('/authenticate/save' , [UserController::class , 'authenticate'])->name('authenticate') ;


Route::delete('/logout' , [UserController::class, 'logout'])->name('logout');

Route::get('/planing', [HomeController::class, 'planing'])->name('planing')->middleware('auth');

Route::get('/planing/vendredi', [HomeController::class, 'vendredi'])->name('vendredi')->middleware('auth');
Route::get('/planing/mercredi', [HomeController::class, 'mercredi'])->name('mercredi')->middleware('auth');
Route::get('/planing/lundi', [HomeController::class, 'lundi'])->name('lundi')->middleware('auth');

Route::get('/planing/lundi', [HomeController::class, 'lundi'])->name('lundi')->middleware('auth');

Route::get('/films', [HomeController::class, 'films'])->name('films')->middleware('auth');

Route::get('/films/details/{id}' , [HomeController::class , 'details'])->name('details')->middleware('auth');



Route::prefix('admin')->name('admin.')->group(function(){

    //Get Users datas
    Route::get('/users', 'App\Http\Controllers\UserController@index')->name('user.index');

    //Show User by Id
    Route::get('/users/show/{id}', 'App\Http\Controllers\UserController@show')->name('user.show');

    //Get Users by Id
    Route::get('/users/create', 'App\Http\Controllers\UserController@create')->name('user.create');

    //Edit User by Id
    Route::get('/users/edit/{id}', 'App\Http\Controllers\UserController@edit')->name('user.edit');

    //Save new User
    Route::post('/users/store', 'App\Http\Controllers\UserController@store')->name('user.store');

    //Update One User
    Route::put('/users/update/{user}', 'App\Http\Controllers\UserController@update')->name('user.update');

    //Update One User Speedly
    Route::put('/users/speed/{user}', 'App\Http\Controllers\UserController@updateSpeed')->name('user.update.speed');

    //Delete User
    Route::delete('/users/delete/{user}', 'App\Http\Controllers\UserController@delete')->name('user.delete');

});


Route::prefix('admin')->name('admin.')->group(function(){

    //Get Films datas
    Route::get('/films', 'App\Http\Controllers\FilmController@index')->name('film.index');

    //Show Film by Id
    Route::get('/films/show/{id}', 'App\Http\Controllers\FilmController@show')->name('film.show');

    //Get Films by Id
    Route::get('/films/create', 'App\Http\Controllers\FilmController@create')->name('film.create');

    //Edit Film by Id
    Route::get('/films/edit/{id}', 'App\Http\Controllers\FilmController@edit')->name('film.edit');

    //Save new Film
    Route::post('/films/store', 'App\Http\Controllers\FilmController@store')->name('film.store');

    //Update One Film
    Route::put('/films/update/{film}', 'App\Http\Controllers\FilmController@update')->name('film.update');

    //Update One Film Speedly
    Route::put('/films/speed/{film}', 'App\Http\Controllers\FilmController@updateSpeed')->name('film.update.speed');

    //Delete Film
    Route::delete('/films/delete/{film}', 'App\Http\Controllers\FilmController@delete')->name('film.delete');

});