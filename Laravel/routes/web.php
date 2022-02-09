<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\GureTabadulController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\SponsorsController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TallerController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\InteresController;




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
/*Route::get('/home', function () {
    return view('secciones.inicio');

})->name('home');*/
Route::get('/home', [App\Http\Controllers\InicioController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\InicioController::class, 'index'])->name('home');
Route::get('/matches', function () {
    return view('voyager.matches.matches');
});
Auth::routes();
Route::resource('matches',MatchController::class);
Route::resource('nav', GureTabadulController::class);
Route::resource('cursos', CursosController::class);
Route::resource('servicios', ServiciosController::class);
Route::resource('nosotros', NosotrosController::class);
Route::resource('inicio', InicioController::class);
Route::resource('skills', SkillsController::class);
Route::resource('interes', InteresController::class);
Route::resource('taller', TallerController::class);

Route::resource('perfil', PerfilController::class)->middleware('auth');;

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/idioma/{idioma}',[IdiomaController::class,'setIdioma'])->name('idioma');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
