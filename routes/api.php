<?php

use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\LoanController;
use App\Http\Controllers\Api\MemberController;
use App\Http\Controllers\Api\StatsController;
use Illuminate\Support\Facades\Route;

Route::apiResource('books', BookController::class)->only(['index', 'show', 'store', 'update', 'destroy']);

Route::get('members', [MemberController::class, 'index']);
Route::get('members/{id}', [MemberController::class, 'show']);

Route::get('loans', [LoanController::class, 'index']);
Route::post('loans', [LoanController::class, 'store']);
Route::put('loans/{id}/kembalikan', [LoanController::class, 'kembalikan']);

Route::get('stats', [StatsController::class, 'index']);
