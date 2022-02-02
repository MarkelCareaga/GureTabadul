<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\GureTabadulController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\SponsorsController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TallerController;
<<<<<<< Updated upstream

=======
use App\Http\Controllers\Auth\RegisterController;
>>>>>>> Stashed changes
use App\Http\Controllers\PerfilController;




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
    return view('secciones.inicio');

})->name('home');



Auth::routes();

Route::resource('nav', GureTabadulController::class);
Route::resource('cursos', CursosController::class);
Route::resource('servicios', ServiciosController::class);
Route::resource('nosotros', NosotrosController::class);
Route::resource('sponsors', SponsorsController::class);
Route::resource('inicio', InicioController::class);

Route::resource('taller', TallerController::class);
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
Route::resource('perfil', PerfilController::class);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
