<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudController;
use App\Http\Controllers\Studentmanagecontroller;
use Illuminate\Routing\Controllers\Middleware;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about_us',[StudController::class,'aboutus']);
Route::group(['prefix'=>'admin'],function(){
Route::get('/user/{id}',function($id){
    return "user id". $id."hii";
});
Route::get('/setting',function(){
    return "hello";
});
});
Route::get('/user/hii/helloooooo',function(){
    return "Lakshmanan";
})->name('siva');


Route::get('/',[Studentmanagecontroller::class,'indexx'])->name('student.index')->middleware('auth');

Route::get('/students/create',[Studentmanagecontroller::class,'create'])->name('student.create');
Route::post('/students/store',[Studentmanagecontroller::class,'store'])->name('student.store');
Route::get('/students/{student}',[StudentmanageController::class,'show'])->name('student.show');
Route::get('/students/{student}/edit',[StudentmanageController::class,'edit'])->name('student.edit');
Route::put('/students/{student}',[Studentmanagecontroller::class,'update'])->name('student.update');
Route::delete('/students/{student}',[Studentmanagecontroller::class,'destroy'])->name('student.delete');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post("/login", [AuthController::class,"loginpost"])->name('login.post');
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'registerpost'])->name('register.post');

