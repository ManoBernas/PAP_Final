<?php

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
Route::get('/', [App\Http\Controllers\HomeController::class, 'frontend'])->name('frontend');





Auth::routes();

Route::resource('/contacto', App\Http\Controllers\ContactoController::class);



Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('dashboard');

Route::get('/produtos', [App\Http\Controllers\ProdutoController::class, 'index'])->middleware('auth')->name('produtos');

Route::post('/produtos', [App\Http\Controllers\ProdutoController::class, 'store']);
Route::get('/produtos/create', [App\Http\Controllers\ProdutoController::class, 'create'])->middleware('auth')->name('produtos.create');
Route::get('/produtos/{produto}/edit', [App\Http\Controllers\ProdutoController::class, 'edit']);
Route::put('/produtos/{produto}', [App\Http\Controllers\ProdutoController::class, 'update']);
Route::post('/produtos/{produto}', [App\Http\Controllers\ProdutoController::class, 'destroy']);
Route::get('/foto/{foto}/delete', [App\Http\Controllers\ProdutoController::class, 'destroyFoto']);

Route::get('/encomendas', [App\Http\Controllers\EncomendaController::class, 'index'])->name('encomendas');

Route::get('/portfolio', [App\Http\Controllers\PortfolioController::class, 'index'])->middleware('auth')->name('portfolio');

Route::post('/categorias', [App\Http\Controllers\CategoriaController::class, 'store']);
Route::get('/categorias', [App\Http\Controllers\CategoriaController::class, 'create'])->name("categoria.create");
Route::get('/categorias/{categoria}/fotos', [App\Http\Controllers\ProdutoController::class, 'inserirFotos'])->middleware('auth')->name('categorias.inserir.fotos');
Route::post('/categorias/inserirFoto', [App\Http\Controllers\CategoriaController::class, 'storeFotos']);
Route::get('/categoria/{foto}/eliminar', [App\Http\Controllers\CategoriaController::class, 'destroyFoto']);
Route::get('/categorias/{categoria}/edit', [App\Http\Controllers\CategoriaController::class, 'edit']);
Route::put('/categorias/{categoria}', [App\Http\Controllers\CategoriaController::class, 'update']);
Route::get('/categorias/{categoria}/delete', [App\Http\Controllers\CategoriaController::class, 'destroy']);



Route::post('/encomendas', [App\Http\Controllers\EncomendaController::class, 'store']);

Route::post('/portfolio', [App\Http\Controllers\PortfolioController::class, 'store']);
Route::get('/encomendas/create', [App\Http\Controllers\EncomendaController::class, 'create'])->middleware('auth')->name('encomendas.create');

Route::get('/portfolio/create', [App\Http\Controllers\PortfolioController::class, 'create'])->middleware('auth')->name('portfolio.create');

Route::get('/projetos', [App\Http\Controllers\ProjetoController::class, 'index'])->middleware('auth')->name('projetos');
Route::get('/projetos/{projeto}/fotos', [App\Http\Controllers\ProjetoController::class, 'inserirFotos'])->middleware('auth')->name('projetos.inserir.fotos');
Route::post('/projetos/inserirFoto', [App\Http\Controllers\ProjetoController::class, 'storeFoto']);
Route::get('/projetos/create', [App\Http\Controllers\ProjetoController::class, 'create'])->middleware('auth')->name('projetos.create');
Route::post('/projetos', [App\Http\Controllers\ProjetoController::class, 'store']);
Route::get('/projetos/{projeto}/edit', [App\Http\Controllers\ProjetoController::class, 'edit']);
Route::put('/projetos/{projeto}', [App\Http\Controllers\ProjetoController::class, 'update']);
Route::get('/projetos/{projeto}/delete', [App\Http\Controllers\ProjetoController::class, 'destroy']);

Route::get('/projeto/{foto}/eliminar', [App\Http\Controllers\ProjetoController::class, 'destroyFoto']);

// Route::get('/projetos/inserirFototra', [App\Http\Controllers\HomeController::class, 'projetos']);

Route::get('/f_projetos', [App\Http\Controllers\HomeController::class, 'projetos']);
Route::get('/show/{categoria}', [App\Http\Controllers\HomeController::class, 'show']);
Route::get('/motas', [App\Http\Controllers\HomeController::class, 'motas']);
Route::get('/pessoas', [App\Http\Controllers\HomeController::class, 'pessoas']);
Route::get('/projetodt/{id}', [App\Http\Controllers\HomeController::class, 'projetodt']);
Route::get('/projetopasseio', [App\Http\Controllers\HomeController::class, 'projetopasseio']);
Route::get('/projetorally', [App\Http\Controllers\HomeController::class, 'projetorally']);


//Route::get('/contacto', [App\Http\Controllers\ContactoController::class, 'index']);
//Route::post('/contacto', [App\Http\Controllers\ContactoController::class, 'store']);

