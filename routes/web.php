<?php

use App\Http\Controllers\CommunityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommunityPostController;
use App\Http\Controllers\ForgetPassController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the 'web' middleware group. Make something great!
|
*/

// Landing
Route::get( '/', [ HomeController::class, 'landing' ] )->middleware( 'guest' );

// Authentication
Route::get( '/register', [ RegisterController::class, 'index' ] )->middleware( 'guest' );
Route::post( '/register', [ RegisterController::class, 'register' ] )->middleware( 'guest' );
Route::get( '/login', [ LoginController::class, 'index' ] )->name( 'login' )->middleware( 'guest' );
Route::post( '/login', [ LoginController::class, 'login' ] )->middleware( 'guest' );
Route::post( '/logout', [ LoginController::class, 'logout' ] );
Route::get('/forgetPass', [ForgetPassController::class, 'index'])->middleware('guest');
Route::post('/forgetPass', [ForgetPassController::class, 'forgetPass'])->middleware('guest');

// Main
Route::get( '/home', [ HomeController::class, 'index' ] ) -> middleware( 'auth' );
Route::get( '/home', [ CommunityController::class, 'show' ] ) ->middleware( 'auth' );
Route::get( '/search', [ CommunityController::class, 'search' ] )->middleware( 'auth' );

// Profile
Route::get( '/profile/{id}', [ UserController::class, 'showProfile' ] )->middleware( 'auth' );
Route::patch( '/store-picture/{id}', [ UserController::class, 'storeProfilePicture' ] )->middleware( 'auth' );
Route::get( '/edit-profile/{id}', [ UserController::class, 'editProfile' ] )->middleware( 'auth' );
Route::patch( '/update-profile/{id}', [ UserController::class, 'updateProfile' ] )->middleware( 'auth' );

// Community
Route::get( '/create-community', [ CommunityController::class, 'create' ] ) -> middleware( 'auth' );
Route::post( '/store-community', [ CommunityController::class, 'store' ] ) -> middleware( 'auth' );
Route::get( '/community/{id}', [ CommunityController::class, 'index' ] ) -> middleware( 'auth' );
Route::post( '/join/{id}', [ MemberController::class, 'join' ] ) -> middleware( 'auth' );
Route::get( '/create-post/{id}', [ CommunityPostController::class, 'create' ] ) -> middleware( 'auth' );
Route::post( '/store-post/{id}', [ CommunityPostController::class, 'store' ] ) -> middleware( 'auth' );
Route::get( '/showMember/{id}', [ MemberController::class, 'showMembers' ] ) -> middleware( 'auth' );
Route::delete('/deleteMember/{id}', [MemberController::class, 'delete'])->middleware('auth');