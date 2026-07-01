<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/download-cv', [PortfolioController::class, 'downloadCv'])->name('portfolio.cv');
Route::post('/contact', [PortfolioController::class, 'submitContact'])->name('portfolio.contact');
