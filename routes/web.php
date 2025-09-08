<?php

use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Pagecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/',[Pagecontroller::class,'index'])->name('home');
Route::get('/about',[Pagecontroller::class,'about'])->name('about');
Route::get('/services',[Pagecontroller::class,'service'])->name('services');
Route::get('/project',[Pagecontroller::class,'project'])->name('project');
Route::get('/contact',[Pagecontroller::class,'contact'])->name('contact');
Route::get('/admin',[AdminPageController::class,'index'])->name('index');
Route::get('/servicelist',[AdminPageController::class,'servicelist'])->name('servicelist');
