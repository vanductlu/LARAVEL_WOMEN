<?php

use App\Http\Controllers\WomanController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('women', WomanController::class);
Route::get('/women', [WomanController::class, 'index'])->name('women.index');
Route::get('/women/create', [WomanController::class, 'create'])->name('women.create');
Route::post('/women', [WomanController::class, 'store'])->name('women.store');
Route::get('/women/{woman}', [WomanController::class, 'show'])->name('women.show');
Route::get('/women/{woman}/edit', [WomanController::class, 'edit'])->name('women.edit');
Route::put('/women/{woman}', [WomanController::class, 'update'])->name('women.update');
Route::delete('/women/{woman}', [WomanController::class, 'destroy'])->name('women.destroy');
Route::get('/login', function () {
    return view('form.form_login');
})->name('login');