<?php
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\OrmController;

use Illuminate\Support\Facades\Route;

Route::get('/ormconsultas',[OrmController::class,'consultas']);



