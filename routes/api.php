<?php

use App\Http\Controllers\Api\V1\TaskController;

Route::prefix('api/v1')->group(function () {
    Route::apiResource('tasks', TaskController::class);
});

Route::middleware('auth:sanctum')->get('/user',function (Request $request) {
    return $request->user();
}); 
