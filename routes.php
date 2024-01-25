<?php


Route::get('check-auth', [App\Http\Controllers\Auth\SessionCheckerController::class, 'checkSession'])->name('check.session');
Route::post('ajax-login', [App\Http\Controllers\Auth\SessionCheckerController::class, 'ajaxlogin'])->name('ajax.login');
