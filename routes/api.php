<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;

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

/*
/URL: /api/department
/POST to create new departments here, breif specifies /department/create 
however, I'd reserve that for a form used to create a new department
and just POST to /department route
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Public endpoints
Route::apiResource('department', DepartmentController::class);
Route::apiResource('users', Controller::class);

//User create and login. Requested endpoint was /users/create. As in it's current capacity
// enpoint /users returns user credentials, for logic and security with how this has been designed segmenting
//these into /register and login made more sense.
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected endpoints
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

