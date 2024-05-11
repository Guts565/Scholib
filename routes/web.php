<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\DocsController;
use App\Http\Controllers\StudentController;
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
    return view('users.home');
})->middleware('guest');


Route::get('/loggedin', function () {
    return view('users.loggedin');
})->middleware('auth');

//users
Route::get('/register', [UserController::class, 'register'])->middleware('guest');
Route::post('/store', [UserController::class, 'store']);
Route::get('/login', [UserController::class, 'login'])->middleware('guest');
Route::post('/auth', [UserController::class, 'auth']);
Route::get('/profile', [UserController::class, 'profile'])->middleware('auth');
Route::get('/edit/{user}', [UserController::class, 'edit'])->middleware('auth');
Route::post('/update{user}', [UserController::class, 'update'])->middleware('auth');
Route::delete('/destroy/{user}', [UserController::class, 'destroy']);
Route::get('/profile', [UserController::class, 'profile'])->middleware('auth');
Route::get('/logout', [UserController::class, 'logout'])->middleware('auth');

//Admin
Route::get('/admin', [AdminController::class, 'index'])->middleware('admin');
Route::get('/admin/edit/{student:nim}', [AdminController::class, 'edit'])->middleware('admin');
Route::post('/admin/update/{student:nim}', [AdminController::class, 'updatedata']);
Route::delete('/admin/delete/{student:nim}', [AdminController::class, 'delete']);
Route::get('/admin/users/', [AdminController::class, 'showusers'])->middleware('admin');
Route::get('/admin/editacc/{user:id}', [AdminController::class, 'editacc'])->middleware('admin');
Route::post('/admin/updateacc/{user:id}', [AdminController::class, 'updateacc']);
Route::delete('/admin/destroy/{user:id}', [AdminController::class, 'destroy']);
Route::get('/admin/logout', [AdminController::class, 'logout'])->middleware('admin');

//student
Route::get('/student/index/', [StudentController::class, 'index'])->middleware('auth');
Route::post('/student/store/', [StudentController::class, 'store'])->middleware('auth');
Route::get('/student/register/', [StudentController::class, 'register'])->middleware('auth');
Route::get('/student/edit/{student:nim}', [StudentController::class, 'edit'])->middleware('auth');
Route::post('/student/update/{student:nim}', [StudentController::class, 'update'])->middleware('auth');
Route::delete('/student/destroy/{student:nim}', [StudentController::class, 'destroy']);

//beasiswa
Route::post('/apply', [BeasiswaController::class, 'store']);

//docs
Route::get('/docs/create', [DocsController::class, 'create'])->middleware('auth');
Route::post('/docs/store', [DocsController::class, 'store'])->middleware('auth');
Route::get('/docs/index/', [DocsController::class, 'index'])->middleware('auth');
Route::get('/docs/edit/{docs}', [DocsController::class, 'edit'])->name('docs.edit')->middleware('auth');
Route::put('/docs/update/{docs}', [DocsController::class, 'update'])->name('docs.update')->middleware('auth');
Route::delete('/docs/destroy/{docs}', [DocsController::class, 'destroy'])->name('docs.destroy')->middleware('auth');
