<?php


use App\Http\Controllers\InicioController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\PontosTuristicosController;
use App\Http\Controllers\HospedagemController;
use App\Http\Controllers\ContatoController;




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

Route::get('/', [InicioController::class,'inicio'])->name('inicio');


Route::get('/noticias', [NoticiasController::class,'noticias'])->name('noticias');

Route::get('/pontos-turisticos', [PontosTuristicosController::class,'pontosTuristicos'])->name('pontos.turisticos');

Route::get('/hospedagem', [HospedagemController::class,'hospedagem'])->name('hospedagem');

Route::get('/contato', [ContatoController::class,'contato'])->name('contato');
