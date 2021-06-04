<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\InventariosController;
use App\Http\Controllers\VehiculosController;
use App\Http\Controllers\DevolucionesController;

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
    return view('welcome');
});
// Route::get('/devoluciones/create', function () {
//     return view('devoluciones.create');
// });
 Route::resource('devoluciones', DevolucionesController::class);
 Route::resource('inventarios', InventariosController::class)->middleware('auth');
  Route::resource('vehiculos', VehiculosController::class);
 
 Route::resource('inventarios/pdf', InventariosController::class);

 Auth::routes();

  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
  Route::get('user-list-pdf','VehiculosController@show')->name('vehiculos.imprimir');