<?php

use App\Http\Controllers\taskcontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect(url('tasks'));
});

Route::get('tasks',[taskcontroller::class,'getall']);
Route::get('done/{id}',[taskcontroller::class,'done']);
Route::get('add',[taskcontroller::class,'addform']);
Route::post('add',[taskcontroller::class,'add']);
Route::get('finsh',[taskcontroller::class,'finish']);
Route::get('edit/{id}',[taskcontroller::class,'editform']);
Route::post('edit/{id}',[taskcontroller::class,'edit']);
Route::get('delete/{id}',[taskcontroller::class,'delete']);
Route::get('remove',[taskcontroller::class,'remove']);
