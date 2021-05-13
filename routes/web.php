<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\persona\personaController;
use App\Http\Controllers\persona\personaDomicilioController;
use App\Http\Controllers\ubicacion\ubicionController;
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

Route::get('/', HomeController::class)->name('/');

Route::resource('personas', personaController::class);

Route::resource('personas-domicilio', personaDomicilioController::class);

Route::post('personas-domicilio-busqueda', [personaDomicilioController::class,'search'])->name('personas-domicilio.search');

Route::get('ubicaciones/index',[ubicionController::class,'index'])->name('ubicaciones.index');



