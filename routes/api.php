<?php

use App\Http\Controllers\Api\V1\TaskController;

Route::prefix('v1')->group(function () {
    Route::apiResource('/tasks', TaskController::class);
});
