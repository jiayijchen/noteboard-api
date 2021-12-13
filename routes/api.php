<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->prefix('v1')->group(function() {
    Route::get('/user', function(Request $request) {
        return $request->user();
    });

    // Route::apiResource('/users', UsersController::class);
    Route::get('/logout', [UsersController::class, 'logout']);

    Route::apiResource('/notes', NoteController::class);
    Route::apiResource('/users', UsersController::class);
});

Route::post('/register', [UsersController::class, 'register']);
