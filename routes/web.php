<?php

use App\Http\Controllers\TeacherController;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Teacher::find(1)->subjects()->sync([1,3]) ;
    // return Teacher::with('subjects')->get();
    // return Subject::with('teachers')->get();
  return view('welcome');
});

route::get('/teachers/{teacher}/assing-subject',[TeacherController::class,'showAssignSubjectsForm']
)->name('teacher.assign-subject-form');
route::post('/teachers/{teacher}/assing-subject',[TeacherController::class,'assignSubjects']
)->name('teacher.assign-subject');


route::resource('/teacher', TeacherController::class);