<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\SubcategoriaController;
use App\Http\Controllers\ProductoController;

Route::get('/', function () { return view('welcome'); });

Route::get('/categorias', [CategoriaController::class,'index'])->name('categorias.index');
Route::get('/subcategorias/{id_categoria}', [SubcategoriaController::class,'index'])->name('subcategorias.index');
Route::get('/productos/{id_subcategoria}', [ProductoController::class,'index'])->name('productos.index');
Route::get('/producto/{id_producto}', [ProductoController::class,'show'])->name('producto.show');
