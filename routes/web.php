<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin2\Plan2Controller;
use App\Http\Controllers\Admin\PlanController;
// use App\Http\Controllers\Admin{
//     PlanController
// };


Route::get('admin/plans', 'App\Http\Controllers\Admin\PlanController@index')->name('plans.index');
// Route::get('/admin/plans', [Plan2Controller::class, 'index'])->name('plans.index');

Route::get('/', function () {
    return view('welcome');
});
