<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\AskedQuestionController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DetailMobilController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
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
Route::get('/detail-mobil', [userController::class, 'show'])->name('user.show');
Route::get('/cust-review', [userController::class, 'review'])->name('user.review');
Route::get('/booking-mobil/{id}', [BookingController::class, 'book'])->name('user.book');
Route::post('/booking-mobil/store', [BookingController::class, 'store'])->name('user.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [adminController::class, 'index'])->name('admin.index');

    // faq
    Route::get('/admin/faq/index', [AskedQuestionController:: class, 'index'])->name('faq.index');
    Route::get('/admin/faq/create', [AskedQuestionController:: class, 'create'])->name('faq.create');
    Route::post('/admin/faq/store', [AskedQuestionController:: class, 'store'])->name('faq.store');
    Route::get('/admin/faq/{id}/edit', [AskedQuestionController::class, 'edit'])->name('faq.edit');
    Route::put('/admin/faq/{id}', [AskedQuestionController::class, 'update'])->name('faq.update');
    Route::delete('admin/faq/{id}', [AskedQuestionController::class, 'destroy'])-> name('faq.destroy');

    // kendaraan
    Route::get('/admin/kendaraan/index', [DetailMobilController::class, 'index'])->name('kendaraan.index');
    Route::get('/admin/kendaraan/create', [DetailMobilController::class, 'create'])->name('kendaraan.create');
    Route::post('/admin/kendaraan/store', [DetailMobilController:: class, 'store'])->name('kendaraan.store');
    Route::get('/admin/kendaraan/{detailMobil}/edit', [DetailMobilController::class, 'edit'])->name('kendaraan.edit');
    Route::put('/admin/kendaraan/{detailMobil}', [DetailMobilController::class, 'update'])->name('kendaraan.update');
    Route::delete('admin/kendaraan/{detailMobil}', [DetailMobilController::class, 'destroy'])-> name('kendaraan.destroy');

    // order 
    route::get("/admin/order/index", [BookingController::class, 'index'])->name('booking.index');
    route::delete('/admin/order/{booking}', [BookingController::class, 'destroy'])->name('booking.destroy');
    Route::get('/booking-pdf/{id}', [BookingController::class, 'generatePDF'])->name('booking.pdf');
    // order update
    route::get('/admin/order/{booking}/edit', [BookingController::class, 'edit'])->name('booking.edit');
    route::put('/admin/order/{booking}', [BookingController::class, 'update'])->name('booking.update');

    // review 
    Route::get('/admin/review/index', [ReviewController::class, 'index'])->name('review.index');
    Route::get('/admin/review/create', [ReviewController::class, 'create'])->name('review.create');
    Route::post('/admin/review/store', [ReviewController::class, 'store'])->name('review.store');
    Route::get('/admin/review/{review}/edit', [ReviewController::class, 'edit'])->name('review.edit');
    Route::put('/admin/review/{review}', [ReviewController::class, 'update'])->name('review.update');
    Route::delete('admin/review/{review}', [ReviewController::class, 'destroy'])-> name('review.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
