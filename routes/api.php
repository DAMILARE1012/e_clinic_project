<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\VitalController;
use App\Http\Controllers\User\ComplaintController;
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
//Mobile app Api start 
//public routes
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

//Auth routes
Route::group(['middleware' => ['auth:sanctum']], function () {

Route::post('/logout', [AuthController::class, 'logout']);
});

//mobile app Api ends

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware(['auth:sanctum'])->group(function(){
    Route::get('vitals', [VitalController::class, 'vitals']);
});

// Routes for Weareables
Route::get('get-vitals/{deviceid}', [VitalController::class, 'getVitals']);
Route::Post('get-access-token', [VitalController::class, 'getToken']);
Route::get('update-vitals', [VitalController::class, 'updateVitals']);


Route::get('questionnaires', [ComplaintController::class, 'getPsyQuestions']);
Route::get('get-user', [ComplaintController::class, 'getCurrentUser']);
Route::post('make-request', [ComplaintController::class, 'submitRequest']);
