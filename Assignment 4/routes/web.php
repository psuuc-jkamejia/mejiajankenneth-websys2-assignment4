<?php
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudUpdateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert', [StudentController::class, 'insertform']);
Route::post('/create', [StudentController::class, 'insert']);
Route::get('/view-records', [StudentController::class, 'index']);
Route::get('/delete-records',[StudentController::class, 'indexDelete']);
Route::get('/delete/{id}', [StudentController::class, 'destroy']);
Route::get('edit-records',[StudUpdateController::class, 'index']);
Route::get('edit/{id}',[StudUpdateController::class, 'show']);
Route::post('edit/{id}',[StudUpdateController::class, 'edit']);
