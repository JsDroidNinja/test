<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\TaskManagementController;
use App\Http\Controllers\CategoryManagementController;
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
    return view('auth.login');
});


Route::post('/login',[Authentication::class,'login'])->name('login');
Route::middleware(['auth'])->group(function(){
    Route::prefix('task')->name('task.')->group(function(){
        Route::get('/',[TaskManagementController::class,'index'])->name('index');
        Route::get('/create',[TaskManagementController::class,'create'])->name('create');
        Route::post('/store',[TaskManagementController::class,'store'])->name('store');
    });
    Route::prefix('category')->name('category.')->group(function(){
        Route::get('/',[CategoryManagementController::class,'index'])->name('index');
        Route::get('/create',[CategoryManagementController::class,'create'])->name('create');
        Route::post('/store',[CategoryManagementController::class,'store'])->name('store');
    });
});
