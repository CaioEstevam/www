<?php

use Faker\Guesser\Name;
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


Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class,'sobrenos'])->name('site.sobrenos');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
Route::post('/contato', [\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
Route::get('/login', function() { return 'Login'; });
 
Route::prefix('/app')->group(function(){
    Route::get('/clientes', function() { return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedor', [\App\Http\Controllers\FornecedorController::class,'index'])->name('app.fornecedor');
    Route::get('/produtos', function() { return 'Produtos'; })->name('app.Produtos');
});


Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class,'teste'])->Name('site.teste');


Route::fallback(function(){
    echo 'A cacilda da rota não existe. <a href="'.route('site.index'),'">clique aqui</a> para retornar à pagina inicial'; 
});
