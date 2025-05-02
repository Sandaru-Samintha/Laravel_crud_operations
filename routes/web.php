<?php

use App\Http\Controllers\studentAuthentication;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;


Route::get('/',[studentAuthentication::class,'signin'])->name('signin');

Route::get('/usercreate',[studentAuthentication::class,'usercreate'])->name('usercreate');

Route::post('/userstore',[studentAuthentication::class,'userstore'])->name('userstore');
Route::post('/userfind',[studentAuthentication::class,'userfind'])->name('userfind');













Route::get('/index',[studentController::class,'index'])->name('index');

Route::get('/create',[studentController::class,'create'])->name('studentcreate');

Route::post('/store',[studentController::class,'store'])->name('studentstore');

Route::get('/{id}/delete',[studentController::class,'delete'])->name('studentdelete');

Route::get('/{id}/update',[studentController::class,'update'])->name('studentupdate');

Route::post('/{id}/edit',[studentController::class,'edit'])->name('studentedit');

