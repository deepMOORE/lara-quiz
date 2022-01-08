<?php

use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/questions', [QuestionController::class, 'index']);
Route::post('/questions', [QuestionController::class, 'store']);
Route::get('/questions/create', [QuestionController::class, 'create']);
Route::get('/questions/{question}/edit', [QuestionController::class, 'edit']);
Route::put('/questions/{question}', [QuestionController::class, 'update']);
Route::delete('/questions/{questionId}', [QuestionController::class, 'destroy']);
