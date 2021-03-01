<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\PostController as APIPostV1;
use App\Http\Controllers\Api\V2\PostController as APIPostV2;
use App\Http\Controllers\Api\LoginController;


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

Route::apiResource('v1/posts', APIPostV1::class)
    ->only(['index','show', 'destroy'])
    ->middleware('auth:sanctum');
Route::apiResource('v2/posts', APIPostV2::class)
    ->only(['index','show'])
    ->middleware('auth:sanctum');

Route::post('login', [LoginController::class, 'login']);

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
