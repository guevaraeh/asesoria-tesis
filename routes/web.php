<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ClientController;

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', [ClientController::class, 'index'])->name('welcome');
Route::get('/acerca-de-nosotros', [ClientController::class, 'about'])->name('about');
Route::get('/contacto', [ClientController::class, 'contact'])->name('contact');
Route::get('/servicios', [ClientController::class, 'services'])->name('services');
Route::get('/enviar', [ClientController::class, 'sendEmail'])->name('email');
Route::post('/envio-contacto', [ClientController::class, 'contact_email'])->name('contact.email');

Route::get('/admin', [AdminController::class, 'index'])->name('index');

Route::post('/admin/store-phone', [AdminController::class, 'store_phone'])->name('phone.store');
Route::post('/admin/store-email', [AdminController::class, 'store_email'])->name('email.store');

Route::put('/admin/phone/{phone}/update', [AdminController::class, 'update_phone'])->name('phone.update');
Route::put('/admin/email/{email}/update', [AdminController::class, 'update_email'])->name('email.update');

Route::get('/admin/main-phone/{phone}', [AdminController::class, 'main_phone'])->name('phone.main');
Route::get('/admin/main-email/{email}', [AdminController::class, 'main_email'])->name('email.main');

Route::delete('/admin/phone/{phone}/destroy', [AdminController::class, 'destroy_phone'])->name('phone.destroy');
Route::delete('/admin/email/{email}/destroy', [AdminController::class, 'destroy_email'])->name('email.destroy');

Route::post('/admin/service/store', [ServiceController::class, 'store'])->name('service.store');
Route::put('/admin/service/{service}/update', [ServiceController::class, 'update'])->name('service.update');
Route::delete('/admin/service/{service}/destroy', [ServiceController::class, 'destroy'])->name('service.destroy');
