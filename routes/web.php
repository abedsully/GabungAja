<?php

use App\Http\Controllers\CommunityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Authentication
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

// Main
Route::get('/home', [HomeController::class, 'index']);
Route::get('/home', [CommunityController::class, 'show']);

// Profile
Route::get('/profile/{id}', [UserController::class, 'showProfile']);
Route::patch('/store-picture/{id}', [UserController::class, 'storeProfilePicture']);
Route::get('/edit-profile/{id}', [UserController::class, 'editProfile']);
Route::patch('/update-profile/{id}', [UserController::class, 'updateProfile']);

// Community
Route::get('/create-community', [CommunityController::class, 'create']);
Route::post('/store-community', [CommunityController::class, 'store']);
Route::get('/community/{id}', [CommunityController::class, 'index']);

Route::post('/join/{id}', [MemberController::class, 'join']);
