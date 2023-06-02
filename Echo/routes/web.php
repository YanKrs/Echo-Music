<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/user', [UserController::class,'index'])->name("user.index");
Route::post('/user', [UserController::class,'show'])->name("user.show");





Route::get('/produto', [ProdutoController::class,'index'])->name("produto.index");
Route::get('/produto/{produto}',[ProdutoController::class,'show'])->name("produto.show");

Route::get('/categoria', [CategoriaController::class,'index'])->name("categoria.index");
Route::get('/categoria/{categoria}', [CategoriaController::class,'show']);



Route::get('/login', [CategoriaController::class,'index']);


Route::post('/carrinho/{produto}', [CarrinhoController::class, 'store'])->name('carrinho.store');
Route::get('/carrinho' , [CarrinhoController::class, 'index'])->name('carrinho.index');
Route::post('/carrinho/remove/{produto}', [CarrinhoController::class, 'remove'])->name('carrinho.remove');


Route::get('/endereco' , [EnderecoController::class, 'store'])->name('endereco.index');
Route::post('/endereco' , [EnderecoController::class, 'save'])->name('endereco.show');


Route::get('/pedido/mostrando', [PedidoController::class, 'index'])->name('pedido.index');
Route::post('/pedido', [PedidoController::class, 'store'])->name('pedido.store');
Route::get('/pedido/show', [PedidoController::class, 'show'])->name('pedido.show');
Route::get('/pedido/fail', [PedidoController::class])->name('pedido.fail');







Route::get('/dashboard', function () {
    return redirect('/');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
