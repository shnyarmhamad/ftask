<?php
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'index']);
route::post('tasks',[TaskController::class,'store']);   
Route::get('/birthday', function () {
    return view('birthday');
});