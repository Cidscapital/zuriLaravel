<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

  Route::get('/', function () {
      return view('Create');
  });

Route::post('/adduser',[UserController::class, 'adduser']);
Route::get('/showusers',[UserController::class, 'showusers']);
Route::get('/deleteuser/{id}',[UserController::class, 'deleteuser']);
Route::get('/edituser/{id}',[UserController::class, 'edituser']);
Route::post('/updateuser/{id}',[UserController::class, 'updateuser']);


