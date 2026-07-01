<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PortfolioApiController;

Route::prefix('v1')->group(function () {
    Route::get('/portfolio', [PortfolioApiController::class, 'getPortfolio']);
    Route::get('/profile', [PortfolioApiController::class, 'getProfile']);
    Route::get('/skills', [PortfolioApiController::class, 'getSkills']);
    Route::get('/projects', [PortfolioApiController::class, 'getProjects']);
    Route::post('/contact', [PortfolioApiController::class, 'submitContact']);
});
