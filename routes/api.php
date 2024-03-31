<?php

use App\Http\Controllers\ArticalController;
use App\Http\Controllers\userController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hello',function(){
    return 'hello api';
});
Route::get('/hello',function(){
    return response()->json(['data' => ['mes' => 'get request']]);

});
Route::post('/hello',function(){
    return response()->json(['data' => ['mes' => 'post request']]);
});
Route::put('/hello',function(){
    return response()->json(['data' => ['mes' => 'put request']]);
});
Route::patch('/hello',function(){
    return response()->json(['data' => ['mes' => 'patch request']]);
});
Route::delete('/hello',function(){
    return response()->json(['data' => ['mes' => 'delete request']]);
});

Route::post('/register',userController::class . '@register');

// add new artical
Route::post('/article',ArticalController::class . '@createArtical');

// get all articals
Route::get('/article',ArticalController::class . '@getAllArticals');

// get specefic artical
Route::get('/article/{id}',ArticalController::class . '@getArtical');

// delete specefic artical
Route::delete('/article/{id}',ArticalController::class . '@deleteArtical');

// update specefic artical
Route::delete('/article/{id}',ArticalController::class . '@updateArtical');
