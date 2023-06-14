<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::group(['prefix' => 'admin', 'as'=>'admin.'], function() {


    Route::get('/index',[AdminController::class,'index'])->name('index');
    Route::get('/create',[AdminController::class,'create'])->name('create');
    Route::post('/store',[AdminController::class,'store'])->name('store');
    Route::get('/edit/{id}',[AdminController::class,'edit'])->name('edit');
    Route::put('/update',[AdminController::class,'update'])
    ->name('update');

    Route::get('/delete',[AdminController::class,'delete'])->name('delete');
    
});

