<?php

use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

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
/*Precisa Tomar Cuidado com a ordem das rotas */
Route::put('/supports/{id}', [SupportController::class, 'update'])->name('supports.update');

Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');

Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');

Route::get('/supports/{id}', [SupportController::class, 'show'])->name('supports.show');

Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');

Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');

/*Essa rota ela define como a rota de contato vai ser acessada, ai passamos a controller e o método que vai ser acessado*/
Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});
