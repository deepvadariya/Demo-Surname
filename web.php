<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
route::get('/',[HomeController::class,'welcome']);

route::get('/home',[HomeController::class,'index']);

route::post('/upload',[HomeController::class,'upload']);

route::get('/view',[HomeController::class,'view']);

route::get('/delete/{id}',[HomeController::class,'delete']);

route::get('/update_view/{id}',[HomeController::class,'update_view']);

route::post('/update/{id}',[HomeController::class,'update']);
