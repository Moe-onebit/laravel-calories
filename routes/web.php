<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DietController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CaloriesController;
use App\Http\Controllers\BmiController;




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
    return view('welcome');
});
Route::get('/home',[HomeController::class,'getHome']);
Route::get('/register',[RegisterController::class,'getRegister']);
Route::get('/login',[LoginController::class,'getLogin']);
Route::get('/diet',[DietController::class,'getDiet']);
Route::get('/contact',[ContactController::class,'getContact']);
Route::get('/calories',[CaloriesController::class,'getCalories']);
Route::get('/bmi',[BmiController::class,'getBmi']);
