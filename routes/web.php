<?php

use App\Http\Controllers\EletrodomesticoController;
use App\Http\Controllers\MarcaController;
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

Route::get('/', function () {
    return redirect('eletrodomesticos');
});

Route::resource('eletrodomesticos', EletrodomesticoController::class);

Route::resource('marcas', MarcaController::class)->except('show');
