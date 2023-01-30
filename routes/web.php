<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\City_corporationController;
use App\Http\Controllers\MunicipalityController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('dashboard', [CustomAuthController::class, 'dashboard']);

Route::get('city_corporation', [City_corporationController::class, 'city_corporation'])->name('city_corporation');
Route::post('store', [City_corporationController::class, 'store']);

Route::get('municipality', [MunicipalityController::class, 'municipality'])->name('municipality');
Route::post('submit', [MunicipalityController::class, 'municipality'])->name('municipality');
