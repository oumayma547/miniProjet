<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;

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
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/students/signup', [StudentController::class, 'showSignupForm'])->name('signup');
Route::post('/students/signup', [StudentController::class, 'store'])->name('student.store');
Route::get('/students/index', [StudentController::class, 'index'])->name('student.index');

Route::get('/admin/index', [LoginController::class, 'showAdminSpace'])->name('admin.index');
