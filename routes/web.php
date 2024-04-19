<?php


use App\Http\Controllers\NebulaController;
use App\Http\Controllers\NimbusController;
use App\Http\Controllers\MagicController;
use App\Http\Controllers\OrçamentosController;
use App\Http\Controllers\TermosController;
use App\Http\Controllers\ContatosController;
use App\Http\Controllers\SegurosController;
use App\Http\Controllers\BicicletasController;
use App\Http\Controllers\IndexController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [IndexController::class, 'index'])->name('inicio');

Route::get('/bicicletas', [BicicletasController::class, 'produto'])->name('produto');

Route::get('/seguros', [SegurosController::class, 'seguros'])->name('seguro');

Route::get('/contato', [ContatosController::class, 'contato'])->name('contato');
Route::post('/contato', [ContatosController::class, 'envio'])->name('contato.envio');

Route::get('/termos', [TermosController::class, 'termo'])->name('termo');

Route::get('/orçamentos', [OrçamentosController::class, 'orçamento'])->name('orcamento');
Route::post('/orçamentos', [OrçamentosController::class, 'salvarDados'])->name('dados.salvo');

Route::get('/magic_might', [MagicController::class, 'magic'])->name('magic');

Route::get('/nimbus_stark', [NimbusController::class, 'nimbus'])->name('nimbus');

Route::get('/nebula_cosmic', [NebulaController::class, 'nebula'])->name('nebula');
