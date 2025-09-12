<?php

use App\Http\Controllers\Admin\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SliderController;

// Public pages
Route::controller(PageController::class)->group(function () {
  Route::get('/', 'index')->name('home');
  Route::get('/about', 'about')->name('about');
  Route::get('/services', 'service')->name('services');
  Route::get('/project', 'project')->name('project');
  Route::get('/contact', 'contact')->name('contact');
});

// Admin
Route::prefix('admin')->as('admin.')->group(function () {
  // Dashboard
  Route::get('/', [AdminPageController::class, 'index'])->name('dashboard');

  // Service
  Route::get('/servicelist', [AdminPageController::class, 'servicelist'])->name('services.index');

  // Sliders
  Route::get('/sliderlist', [AdminPageController::class, 'sliderlist'])->name('sliders.index');
  Route::post('/sliders.store', [SliderController::class, 'store'])->name('sliders.store');
  Route::get('/addSlider', [AdminPageController::class, 'addSlider'])->name('addSlider');
  Route::get('/sliders/{id}/edit', [SliderController::class, 'edit'])->name('sliders.edit');
  Route::put('/sliders/{id}', [SliderController::class, 'update'])->name('sliders.update');
  Route::delete('/sliders/{id}', [SliderController::class, 'destroy'])->name('sliders.destroy');


  // Projects
  Route::get('/projects', [AdminPageController::class, 'projectlist'])->name('projects.index');
  Route::get('/projects/create', [AdminPageController::class, 'addproject'])->name('projects.create');
  Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
  Route::get('/projects/{id}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
  Route::put('/projects/{id}', [ProjectController::class, 'update'])->name('projects.update');
  Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');

  // About

  Route::get('/about', [AdminPageController::class, 'aboutlist'])->name('aboutlist');
  Route::get('/about/creat', [AdminPageController::class, 'addAbout'])->name('about.add');
  Route::post('aboutus', [AboutController::class, 'store'])->name('aboutus.store');
  // Service
  Route::get('service/create', [AdminPageController::class, 'addservice'])->name('service.addservice');
  Route::post('services', [ServiceController::class, 'store'])->name('services.store');
  Route::get('/services/{id}/edit', [ServiceController::class, 'editService'])->name('services.edit');
  Route::put('/services/{id}',      [ServiceController::class, 'updateService'])->name('services.update');
  Route::delete('/services/{id}',   [ServiceController::class, 'destroyService'])->name('services.destroy');

  // Process Steps (Our Process) – eyni ServiceController
  Route::get('/process-steps/{id}/edit', [ServiceController::class, 'editProcess'])->name('process_steps.edit');
  Route::put('/process-steps/{id}',      [ServiceController::class, 'updateProcess'])->name('process_steps.update');
  Route::delete('/process-steps/{id}',   [ServiceController::class, 'destroyProcess'])->name('process_steps.destroy');
});
