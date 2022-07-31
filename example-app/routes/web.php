<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\ArquivoController;
use App\Http\Controllers\ConteudoController;
use App\Http\Controllers\SubareaController;
use App\Http\Controllers\UsuarioController;
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
    return view('index');
});


 
Route::controller(AreaController::class)->group(function () {
    Route::get('/area', 'index')->name('area.index');
    Route::get('/area/cadastrar', 'create');
    Route::post('/area/salvar', 'store');
    Route::get('/area/{id}/editar', 'edit')->name('area.edit');
    Route::put('/area/{id}/atualizar', 'update')->name('area.update');
    Route::delete('/area/{id}/excluir', 'delete')->name('area.delete');
});

Route::controller(SubareaController::class)->group(function () {
    Route::get('/subarea', 'index')->name('subarea.index');
    Route::get('/subarea/cadastrar', 'create');
    Route::post('/subarea/salvar', 'store');
    Route::get('/subarea/{id}/editar', 'edit')->name('subarea.edit');
    Route::put('/subarea/{id}/atualizar', 'update')->name('subarea.update');
    Route::delete('/subarea/{id}/excluir', 'delete')->name('subarea.delete');
    
});

Route::get('/usuario', [UsuarioController::class, 'index']);

Route::get('/conteudo', [ConteudoController::class, 'index']);

Route::get('/arquivo', [ArquivoController::class, 'index']);


