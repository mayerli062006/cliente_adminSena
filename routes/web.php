<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\HomeController;

// Ruta del Home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/mision-vision', function () {
    return view('mision_vision.index');
})->name('mision.vision');



// RUTAS PARA COMPUTER
Route::get('computer/list', [ComputerController::class, 'index'])->name('computer.index');
Route::get('computer/create', [ComputerController::class, 'create'])->name('computer.create');
Route::post('computer', [ComputerController::class, 'store'])->name('computer.store');
Route::get('computer/{id}/edit', [ComputerController::class, 'edit'])->name('computer.edit');
Route::get('computer/{id}', [ComputerController::class, 'show'])->name('computer.show');
Route::put('computer/{id}', [ComputerController::class, 'update'])->name('computer.update');
Route::delete('computer/{id}', [ComputerController::class, 'destroy'])->name('computer.destroy');

// RUTAS PARA AREA
Route::get('areas/list', [AreaController::class, 'index'])->name('areas.index');
Route::get('areas/create', [AreaController::class, 'create'])->name('areas.create');
Route::post('areas', [AreaController::class, 'store'])->name('areas.store');
Route::get('areas/{id}/edit', [AreaController::class, 'edit'])->name('areas.edit');
Route::get('areas/{id}', [AreaController::class, 'show'])->name('areas.show');
Route::put('areas/{id}', [AreaController::class, 'update'])->name('areas.update');
Route::delete('areas/{id}', [AreaController::class, 'destroy'])->name('areas.destroy');


// RUTAS PARA TRAINING CENTER
Route::get('trainingcenter/list', [TrainingCenterController::class, 'index'])->name('training_center.index');
Route::get('trainingcenter/create', [TrainingCenterController::class, 'create'])->name('training_center.create');
Route::post('trainingcenter', [TrainingCenterController::class, 'store'])->name('training_center.store');
Route::get('trainingcenter/{id}/edit', [TrainingCenterController::class, 'edit'])->name('training_center.edit');
Route::get('trainingcenter/{id}', [TrainingCenterController::class, 'show'])->name('training_center.show');
Route::put('trainingcenter/{id}', [TrainingCenterController::class, 'update'])->name('training_center.update');
Route::delete('trainingcenter/{id}', [TrainingCenterController::class, 'destroy'])->name('training_center.destroy');


// RUTAS PARA COURSE
Route::get('course/list', [CourseController::class, 'index'])->name('course.index');
Route::get('course/create', [CourseController::class, 'create'])->name('course.create');
Route::post('course', [CourseController::class, 'store'])->name('course.store');
Route::get('course/{id}/edit', [CourseController::class, 'edit'])->name('course.edit');
Route::get('course/{id}', [CourseController::class, 'show'])->name('course.show');
Route::put('course/{id}', [CourseController::class, 'update'])->name('course.update');
Route::delete('course/{id}', [CourseController::class, 'destroy'])->name('course.destroy');


// RUTAS PARA APPRENTICE
Route::get('apprentice/list', [ApprenticeController::class, 'index'])->name('apprentice.index');
Route::get('apprentice/create', [ApprenticeController::class, 'create'])->name('apprentice.create');
Route::post('apprentice', [ApprenticeController::class, 'store'])->name('apprentice.store');
Route::get('apprentice/{id}/edit', [ApprenticeController::class, 'edit'])->name('apprentice.edit');
Route::get('apprentice/{id}', [ApprenticeController::class, 'show'])->name('apprentice.show');
Route::put('apprentice/{id}', [ApprenticeController::class, 'update'])->name('apprentice.update');
Route::delete('apprentice/{id}', [ApprenticeController::class, 'destroy'])->name('apprentice.destroy');


// RUTAS PARA TEACHER
Route::get('teacher/list', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('teacher', [TeacherController::class, 'store'])->name('teacher.store');
Route::get('teacher/{id}/edit', [TeacherController::class, 'edit'])->name('teacher.edit');
Route::get('teacher/{id}', [TeacherController::class, 'show'])->name('teacher.show');
Route::put('teacher/{id}', [TeacherController::class, 'update'])->name('teacher.update');
Route::delete('teacher/{id}', [TeacherController::class, 'destroy'])->name('teacher.destroy');
