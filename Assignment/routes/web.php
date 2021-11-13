<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UploadController;


Route::get('/create-employee',[EmployeeController::class,'create']);
Route::post('/store-employee',[EmployeeController::class,'store']);

Route::get('/login',[AuthController::class,'login']);


Route::post('/loginstore',[AuthController::class,'loginstore']);

Route::group(['middleware' =>'checkloggedin'], function(){

    Route::get('dashboard', function(){
        return view('dashboard');
    });
   Route::group(['middleware' =>'checkIfStudent'], function(){
    Route::get('/student',[AuthController::class,'student']);
   
    });

Route::group(['middleware' =>'checkIfTeacher'], function(){
        Route::get('/teacher',[AuthController::class,'teacher']);
       
        });
});

Route::get('/admin', function () {
    return view('');
});

Route::get('/web', function () {
    return view('admin/pages/web');
});

Route::get('/wtables', function () {
    return view('admin/pages/tables');
});

Route::get('/wregister', function () {
    return view('admin/pages/register');
});
 
Route::get('/wlogin', function () {
    return view('admin/pages/login');
});

Route::get('upload',[UploadController::class,'upload']);

Route::post('upload-image', [UploadController::class,'uploadimage']);


Route::get ('home', function(){
       return view('website.layouts.home'); 
});