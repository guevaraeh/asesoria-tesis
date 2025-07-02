<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/acerca-de-nosotros', function () {
    return view('pages.about');
})->name('about');

Route::get('/contacto', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/servicios', function () {
    return view('pages.services');
})->name('services');


Route::get('/admin', [AdminController::class, 'index'])->name('index');

Route::post('/admin/store-phone', [AdminController::class, 'store_phone'])->name('phone.store');
Route::post('/admin/store-email', [AdminController::class, 'store_email'])->name('email.store');

Route::post('/admin/phone/{phone}/update', [AdminController::class, 'update_phone'])->name('phone.update');
Route::post('/admin/email/{email}/update', [AdminController::class, 'update_email'])->name('email.update');

Route::get('/admin/main-phone/{phone}', [AdminController::class, 'main_phone'])->name('phone.main');
Route::get('/admin/main-email/{email}', [AdminController::class, 'main_email'])->name('email.main');

Route::delete('/admin/phone/{phone}/destroy', [AdminController::class, 'destroy_phone'])->name('phone.destroy');
Route::delete('/admin/email/{email}/destroy', [AdminController::class, 'destroy_email'])->name('email.destroy');