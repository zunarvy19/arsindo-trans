<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\AskedQuestionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\userController;
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

Route::get('/', [userController::class, 'index'])->name('user.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [adminController::class, 'index'])->name('admin.index');
    Route::get('/admin/faq/index', [AskedQuestionController:: class, 'index'])->name('faq.index');
    Route::get('/admin/faq/create', [AskedQuestionController:: class, 'create'])->name('faq.create');
    Route::post('/admin/faq/store', [AskedQuestionController:: class, 'store'])->name('faq.store');
    Route::get('/admin/faq/{id}/edit', [AskedQuestionController::class, 'edit'])->name('faq.edit');
    Route::put('/admin/faq/{id}', [AskedQuestionController::class, 'update'])->name('faq.update');
    Route::delete('admin/faq/{id}', [AskedQuestionController::class, 'destroy'])-> name('faq.destroy');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
