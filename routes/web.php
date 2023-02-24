<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
Route::post('/contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::get('/contact/thanks', [ContactController::class, 'complete'])->name('contact.complete');
Route::post('/contact/delete', [ContactController::class, 'delete'])->name('contact.delete');
Route::get('/contact/search', [ContactController::class, 'search'])->name('contact.search');