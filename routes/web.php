<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordController;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RegisterAdminController;

Route::get('/admin_page', [WordController::class, 'index']);
Route::get('/main_page', [MainController::class, 'index'])->middleware('auth');
Route::get('/team_profile', [MainController::class, 'indexTeam'])->middleware('auth');
Route::get('/credits', [MainController::class, 'indexCreds'])->middleware('auth');
Route::get('/login_user', [MainController::class, 'indexLogin'])->name('login')->middleware('guest');
Route::get('/regist_user', [MainController::class, 'indexRegist'])->middleware('guest');
Route::get('/login_admin', [MainController::class, 'loginAdmin'])->middleware('guest');
Route::post('/logout', [MainController::class, 'logout']);
Route::post('/logoutAdmin', [MainController::class, 'logoutAdmin']);

Route::get('/add_word', [WordController::class, 'tambahKata']);
Route::post('/add_word', [WordController::class, 'prosesTambahKata']);

Route::delete('/hapus-kata/{id}', [WordController::class, 'hapusKata']);

Route::get('/update_word/{id}', [WordController::class, 'editKata']);
Route::put('/update-kata/{id}', [WordController::class, 'updateKata']);

Route::post('/register', [RegisterAdminController::class, 'store']);
Route::post('/user_log', [MainController::class, 'authUser']);
Route::post('/admin_login', [MainController::class, 'authAdmin']);

Route::post('/guess_word', [MainController::class, 'checkGuess']);