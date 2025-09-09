<?php

use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Pagecontroller;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'service')->name('services');
    Route::get('/project', 'project')->name('project');
    Route::get('/contact', 'contact')->name('contact');
});

// Admin

Route::prefix('admin')
    ->as('admin.')
    ->group(function () {
        Route::get('/', [AdminPageController::class, 'index'])->name('dashboard');
        Route::get('/servicelist', [AdminPageController::class, 'servicelist'])->name('services.index');
        Route::get('/sliderlist', [AdminPageController::class, 'sliderlist'])->name('sliders.index');
        Route::get('/projectlist', [AdminPageController::class, 'projectlist'])->name('projects.index');
        Route::post('/sliders.store',[SliderController::class,'store'])->name('sliders.store');
        Route::get('/addSlider',[AdminPageController::class,'addSlider'])->name('addSlider');
    });
