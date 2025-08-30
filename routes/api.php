<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

route::prefix('produtos')->group(function () {
    Route::get('/', [ProdutoController::class, 'index'])->name('produtos.index');
    Route::post('/', [ProdutoController::class, 'store'])->name('produtos.store');
    Route::put('/{id}', [ProdutoController::class, 'update'])->name('produtos.update');
    Route::delete('/{id}', [ProdutoController::class, 'destroy'])->name('produtos.destroy');
});
