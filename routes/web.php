<?php


use App\Http\Controllers\inicioController;
use App\Http\Controllers\quemSomosController;
use App\Http\Controllers\programaMeuAmbienteController;
use App\Http\Controllers\portalDeEducacaoAmbientalController;
use App\Http\Controllers\qualidadeAmbientalController;
use App\Http\Controllers\servicosController;
use App\Http\Controllers\noticiasController;
use App\Http\Controllers\denunciaController;
use App\Http\Controllers\contatoController;
use App\Http\Controllers\perguntasERespostasController;
use App\Http\Controllers\transparenciaController;


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

Route::get('/contato', [contatoController::class,'contato'])->name('contato');
