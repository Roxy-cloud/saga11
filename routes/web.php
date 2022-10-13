<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AnioescolarController;
use App\Http\Controllers\LiceoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CrpController;
use App\Http\Controllers\CalificacionController;

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

Auth::routes();
Route::resource('users', App\Http\Controllers\UserController::class)->middleware('auth');
Route::resource('liceos', App\Http\Controllers\LiceoController::class)->middleware('auth');
Route::resource('anioescolars', App\Http\Controllers\AnioescolarController::class)->middleware('auth');
Route::resource('seccions', App\Http\Controllers\SeccionController::class)->middleware('auth');
Route::resource('signatures', App\Http\Controllers\SignatureController::class)->middleware('auth');
Route::resource('students', App\Http\Controllers\StudentController::class)->middleware('auth');
Route::resource('calificacions', App\Http\Controllers\CalificacionController::class)->middleware('auth');
Route::resource('crps', App\Http\Controllers\CrpController::class)->middleware('auth');
Route::resource('crpcalifs', App\Http\Controllers\CrpcalifController::class)->middleware('auth');
Route::resource('student_signatures', App\Http\Controllers\StudentSignatureController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
