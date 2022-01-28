<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\GureTabadulController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\SponsorsController;
use App\Http\Controllers\InicioController;


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
/*Route::resource('index', AdminController::class);*/
Route::resource('cursos', CursosController::class);
Route::resource('servicios', ServiciosController::class);
Route::resource('nosotros', NosotrosController::class);
Route::resource('sponsors', SponsorsController::class);
Route::resource('inicio', InicioController::class);
Route::resource('login', LoginController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
