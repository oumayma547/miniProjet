<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController;

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




Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/home',[UsersController::class,'index'])->name('home');
    Route::post('/{id}/edit',[UsersController::class,'edit'])->name('edit');
    Route::get('/{id}/update',[UsersController::class,'update'])->name('update');

    Route::delete('/{id}/destroy',[UsersController::class,'destroy'])->name('destroy');

});