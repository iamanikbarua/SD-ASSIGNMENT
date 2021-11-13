<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController; 

Route::get('/', [EmployeeController::class,'create']);

 Route::get('/employee', [EmployeeController::class,'home']);

 Route::get('/edit/{id}', [EmployeeController::class,'edit']);

 Route::post('/update/{id}',[EmployeeController::class,'update']); 

 Route::post('/store-employee/', [EmployeeController::class,'store']);

  Route::get('/delete/{id}', [EmployeeController::class,'delete']);

  Route::get('/create-employee', [EmployeeController::class,'create']);
  
  Route::post('/store-employees',[EmployeeController::class,'store']);  