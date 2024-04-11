<?php

use App\Http\Controllers\BackPanel\AdminDashboard;
use App\Http\Controllers\BackPanel\CategoryController;
use App\Http\Controllers\BackPanel\HomeController;


Route::group([
    'as' => 'back-panel.',
    'prefix' => 'back-panel'
], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
//admin route
    Route::get('/role', [AdminDashboard::class, 'index']);
    Route::get('/createrole', [AdminDashboard::class, 'create']);
    Route::post('/storerole', [AdminDashboard::class, 'store']);
    Route::get('/editrole', [AdminDashboard::class, 'edit']);
    Route::post('/updaterole', [AdminDashboard::class, 'update']);
    Route::post('/deleterole', [AdminDashboard::class, 'delete']);
    Route::get('/assign', [AdminDashboard::class, 'roleassign']);
    Route::post('/Assignrole', [AdminDashboard::class, 'assign']);
    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/login');
    });


//category route
    Route::get('/categorylist', [CategoryController::class, 'index']);
    Route::get('/categorycreate', [CategoryController::class, 'create']);
    Route::post('/categorystore', [CategoryController::class, 'store']);
    Route::post('/categoryedit', [CategoryController::class, 'edit']);
    Route::post('/categoryupdate', [CategoryController::class, 'update']);
    Route::post('/categorydelete', [CategoryController::class, 'delete']);
});
