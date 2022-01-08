<?php

use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

Route::get('', [QuestionController::class, 'index']);

Route::group([
    'prefix' => 'questions',
], function () {
    Route::get('', [QuestionController::class, 'index']);
    Route::post('', [QuestionController::class, 'store']);
    Route::get('create', [QuestionController::class, 'create']);
    Route::get('{question}/edit', [QuestionController::class, 'edit']);
    Route::put('{question}', [QuestionController::class, 'update']);
    Route::delete('{questionId}', [QuestionController::class, 'destroy']);
});
