<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogCategoryController;

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


Route::group(['prefix' => LaravelLocalization::setLocale()], function(){
Route::group(['prefix' => 'admin', 'as'=>'admin.'], function() {


    Route::get('/index',[AdminController::class,'index'])->name('index');
    Route::get('/create',[AdminController::class,'create'])->name('create');
    Route::post('/store',[AdminController::class,'store'])->name('store');
    Route::get('/edit/{id}',[AdminController::class,'edit'])->name('edit');
    Route::put('/update',[AdminController::class,'update'])->name('update');
    Route::get('/delete',[AdminController::class,'delete'])->name('delete');
    
});

Route::group(['prefix' => 'BlogCategroy', 'as'=>'BlogCategory.'], function() {

    Route::get('/index',[BlogCategoryController::class,'index'])->name('index');
    Route::get('/create',[BlogCategoryController::class,'create'])->name('create');
    Route::post('/store',[BlogCategoryController::class,'store'])->name('store');
    Route::get('/edit/{id}',[BlogCategoryController::class,'edit'])->name('edit');
    Route::put('/update',[BlogCategoryController::class,'update'])->name('update');
    Route::get('/delete',[BlogCategoryController::class,'delete'])->name('delete');
    
});
});

