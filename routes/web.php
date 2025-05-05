<?php

use App\Http\Controllers\PaydunyaController;
use Illuminate\Support\Facades\Route;

Route::post('/payer', [PaydunyaController::class, 'pay'])->name('paydunya.pay');
Route::post('/paydunya/callback', [PaydunyaController::class, 'callback'])->name('paydunya.callback');
Route::get('/paydunya/success', [PaydunyaController::class, 'success'])->name('paydunya.success');
Route::get('/paydunya/cancel', [PaydunyaController::class, 'cancel'])->name('paydunya.cancel');


