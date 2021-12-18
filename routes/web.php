<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LessonController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentLessonController;

Route::resources([
    'lessons'=> LessonController::class,
    'students'=> StudentController::class
]);

Route::get('/', [StudentLessonController::class, 'index']);

Route::get('/asignar/{student}', [StudentController::class, 'asignar'])->name('students.asignar');
Route::post('/asignarMateria',[StudentController::class, 'asignarMateria'])->name('students.asignarMateria');

Route::get('/asigLesson/{lesson}', [LessonController::class, 'asigLesson'])->name('lessons.asigLesson');
Route::post('/asignarLesson',[LessonController::class, 'asignarLesson'])->name('lessons.asignarLesson');