<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\ResultatController;
use App\Http\Controllers\SeanceController;
use App\Http\Controllers\DayOfCourseController;
use App\Http\Controllers\EmploiController;

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
    return view('login');
});

Route::middleware('auth')->group(function () {
  Route::get('/students/index', [StudentController::class, 'index'])->name('student.index');


  Route::prefix('admin')->name('admin')->group(function(){


      Route::get('/home',[UsersController::class,'index'])->name('home');
      Route::post('/{id}/edit',[UsersController::class,'edit'])->name('edit');
      Route::get('/{id}/update',[UsersController::class,'update'])->name('update');
      Route::delete('/{id}/destroy',[UsersController::class,'destroy'])->name('destroy');


      Route::prefix('index')->name('index')->group(function(){
        Route::get('', [LoginController::class, 'showAdminSpace'])->name('home');

        Route::prefix('student')->name('student')->group(function(){
          Route::get('', [StudentController::class, 'display'])->name('admin.index.student');
          Route::get('/new', function () {
              return view('admin.student.new-student');
          });
          Route::post('/new', [StudentController::class, 'storeStudent'])->name('store');
          Route::get('/{id}', [StudentController::class, 'edit'])->name('edit');
          Route::put('/{id}', [StudentController::class, 'update'])->name('update');

          Route::delete('destroy/{id}', [StudentController::class, 'destroy'])->name('destroy');


        });
      });
  });
});



Route::middleware(['auth'])->group(function () {
    Route::resource('admin/index/teachers', TeacherController::class)->except(['show']);
    Route::get('admin/index/teachers/new', [TeacherController::class, 'create'])->name('admin.teachers.new');
    Route::get('admin/index/teachers/{id}/delete', [TeacherController::class, 'destroy'])->name('teachers.destroy');
    Route::delete('admin/index/teachers/delete/{id}', [TeacherController::class, 'delete'])->name('admin.teachers.delete');
});

// routes/web.php
Route::middleware(['auth'])->group(function () {
  Route::get('admin/index/classrooms/new', [ClassroomController::class, 'create'])->name('classrooms.create');
  Route::get('admin/index/classrooms', [ClassroomController::class, 'index'])->name('classrooms.index');
  Route::post('admin/index/classrooms', [ClassroomController::class, 'store'])->name('classrooms.store');

  Route::get('admin/index/classrooms/{id}/edit', [ClassroomController::class, 'edit'])->name('classrooms.edit');
  Route::put('admin/index/classrooms/{id}', [ClassroomController::class, 'update'])->name('classrooms.update');
  Route::delete('admin/index/classrooms/{id}', [ClassroomController::class, 'destroy'])->name('classrooms.destroy');
});


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/students/signup', [StudentController::class, 'showSignupForm'])->name('signup');
Route::post('/students/signup', [StudentController::class, 'store'])->name('student.store');


Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/home',[UsersController::class,'index'])->name('home');
    Route::post('/{id}/edit',[UsersController::class,'edit'])->name('edit');
    Route::get('/{id}/update',[UsersController::class,'update'])->name('update');

    Route::delete('/{id}/destroy',[UsersController::class,'destroy'])->name('destroy');

});


Route::middleware(['auth'])->group(function () {
    Route::get('admin/index/departments', [DepartmentController::class, 'index'])->name('departments.index');
    Route::get('admin/index/departments/create', [DepartmentController::class, 'create'])->name('departments.create');
    Route::post('admin/index/departments', [DepartmentController::class, 'store'])->name('departments.store');
    Route::get('admin/index/departments/{department}/edit', [DepartmentController::class, 'edit'])->name('departments.edit');
    Route::put('admin/index/departments/{department}', [DepartmentController::class, 'update'])->name('departments.update');
    Route::delete('admin/index/departments/{department}', [DepartmentController::class, 'destroy'])->name('departments.destroy');
});



Route::middleware(['auth'])->group(function () {
    Route::get('admin/index/demandes', [DemandeController::class, 'index'])->name('demandes.index');
    Route::post('admin/index/demandes/{demande}/accept', [DemandeController::class, 'accept'])->name('demandes.accept');
    Route::post('admin/index/demandes/{demande}/reject', [DemandeController::class, 'reject'])->name('demandes.reject');
    Route::delete('admin/index/demandes/{demande}', [DemandeController::class, 'destroy'])->name('demandes.destroy');
});



Route::middleware(['auth'])->group(function () {
    Route::get('admin/index/resultats', [ResultatController::class, 'index'])->name('resultats.index');
    Route::get('admin/index/resultats/create', [ResultatController::class, 'create'])->name('resultats.create');
    Route::post('admin/index/resultats', [ResultatController::class, 'store'])->name('resultats.store');
    Route::get('admin/index/resultats/{resultat}', [ResultatController::class, 'show'])->name('resultats.show');
    Route::get('admin/index/resultats/{resultat}/edit', [ResultatController::class, 'edit'])->name('resultats.edit');
    Route::put('admin/index/resultats/{resultat}', [ResultatController::class, 'update'])->name('resultats.update');
    Route::delete('admin/index/resultats/{resultat}', [ResultatController::class, 'destroy'])->name('resultats.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('admin/index/seances', [SeanceController::class, 'index'])->name('seances.index');
    Route::get('admin/index/seances/{dayId}/create', [SeanceController::class, 'create'])->name('seances.create');
    Route::post('admin/index/seances', [SeanceController::class, 'store'])->name('seances.store');
    Route::get('admin/index/seances/{seance}', [SeanceController::class, 'show'])->name('seances.show');
    Route::get('admin/index/seances/{seance}/edit', [SeanceController::class, 'edit'])->name('seances.edit');
    Route::put('admin/index/seances/{seance}', [SeanceController::class, 'update'])->name('seances.update');
    Route::delete('admin/index/seances/{seance}', [SeanceController::class, 'destroy'])->name('seances.destroy');
});




Route::middleware(['auth'])->group(function () {
    Route::get('admin/index/days-of-course', [DayOfCourseController::class, 'index'])->name('days-of-course.index');
    Route::get('admin/index/days-of-course/create/{emploieId}', [DayOfCourseController::class, 'create'])->name('days-of-course.create');
    Route::post('admin/index/days-of-course', [DayOfCourseController::class, 'store'])->name('days-of-course.store');
    Route::get('admin/index/days-of-course/{dayOfCourse}', [DayOfCourseController::class, 'show'])->name('days-of-course.show');
    Route::get('admin/index/days-of-course/{dayOfCourse}/edit', [DayOfCourseController::class, 'edit'])->name('days-of-course.edit');
    Route::put('admin/index/days-of-course/{dayOfCourse}', [DayOfCourseController::class, 'update'])->name('days-of-course.update');
    Route::delete('admin/index/days-of-course/{dayOfCourse}', [DayOfCourseController::class, 'destroy'])->name('days-of-course.destroy');
});




Route::middleware(['auth'])->group(function () {
    Route::get('admin/index/emplois', [EmploiController::class, 'index'])->name('emplois.index');
    Route::get('admin/index/emplois/create', [EmploiController::class, 'create'])->name('emplois.create');
    Route::post('admin/index/emplois', [EmploiController::class, 'store'])->name('emplois.store');
    Route::get('admin/index/emplois/{emploi}', [EmploiController::class, 'show'])->name('emplois.show');
    Route::get('admin/index/emplois/{emploi}/edit', [EmploiController::class, 'edit'])->name('emplois.edit');
    Route::put('admin/index/emplois/{emploi}', [EmploiController::class, 'update'])->name('emplois.update');
    Route::delete('admin/index/emplois/{emploi}', [EmploiController::class, 'destroy'])->name('emplois.destroy');
});
