<?php

use Illuminate\Support\Facades\Route;

// Public
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\AuthController;
// Admin Controllers
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\OurHistory;
use App\Http\Controllers\Admin\OurHistoryCountryController;


/*
|--------------------------------------------------------------------------
| Public routes
|--------------------------------------------------------------------------
*/
Route::controller(PageController::class)->group(function () {
    Route::get('/',         'index')->name('home');
    Route::get('/about',    'about')->name('about');
    Route::get('/services', 'service')->name('services');
    Route::get('/project',  'project')->name('project');
    Route::get('/contact',  'contact')->name('contact');
});

/*
|--------------------------------------------------------------------------
| Admin routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')
    ->as('admin.')
    ->middleware(['auth','admin']) // <-- yalnız login + admin girə bilər
    ->group(function () {
        // Dashboard
        Route::get('/', [AdminPageController::class, 'index'])->name('dashboard');

        // Services
        Route::get('/services',               [AdminPageController::class, 'servicelist'])->name('services.index');
        Route::get('/services/create',        [AdminPageController::class, 'addservice'])->name('services.create');
        Route::post('/services',              [ServiceController::class, 'store'])->name('services.store');
        Route::get('/services/{id}/edit',     [ServiceController::class, 'editService'])->name('services.edit');
        Route::put('/services/{id}',          [ServiceController::class, 'updateService'])->name('services.update');
        Route::delete('/services/{id}',       [ServiceController::class, 'destroyService'])->name('services.destroy');

        // Process Steps
        Route::get('/process-steps/{id}/edit', [ServiceController::class, 'editProcess'])->name('process_steps.edit');
        Route::put('/process-steps/{id}',      [ServiceController::class, 'updateProcess'])->name('process_steps.update');
        Route::delete('/process-steps/{id}',   [ServiceController::class, 'destroyProcess'])->name('process_steps.destroy');

        // Sliders
        Route::get('/sliders',               [AdminPageController::class, 'sliderlist'])->name('sliders.index');
        Route::get('/sliders/create',        [AdminPageController::class, 'addSlider'])->name('sliders.create');
        Route::post('/sliders',              [SliderController::class, 'store'])->name('sliders.store');
        Route::get('/sliders/{id}/edit',     [SliderController::class, 'edit'])->name('sliders.edit');
        Route::put('/sliders/{id}',          [SliderController::class, 'update'])->name('sliders.update');
        Route::delete('/sliders/{id}',       [SliderController::class, 'destroy'])->name('sliders.destroy');

        // Projects
        Route::get('/projects',              [AdminPageController::class, 'projectlist'])->name('projects.index');
        Route::get('/projects/create',       [AdminPageController::class, 'addproject'])->name('projects.create');
        Route::post('/projects',             [ProjectController::class, 'store'])->name('projects.store');
        Route::get('/projects/{id}/edit',    [ProjectController::class, 'edit'])->name('projects.edit');
        Route::put('/projects/{id}',         [ProjectController::class, 'update'])->name('projects.update');
        Route::delete('/projects/{id}',      [ProjectController::class, 'destroy'])->name('projects.destroy');

        // About
        Route::get('/about',                 [AdminPageController::class, 'aboutlist'])->name('aboutlist');
        Route::get('/about/create',          [AdminPageController::class, 'addAbout'])->name('about.add');
        Route::post('/about',                [AboutController::class, 'store'])->name('about.store');
        Route::get('/about/{id}/edit',       [AboutController::class, 'edit'])->name('about.edit');
        Route::put('/about/{id}',            [AboutController::class, 'update'])->name('about.update');
        Route::delete('/about/{id}',         [AboutController::class, 'destroy'])->name('about.destroy');

        // Our History
        Route::get('/history',                       [AdminPageController::class, 'HistoryPage'])->name('historylist');
        Route::get('/about/history/create',          [AdminPageController::class, 'addHistpage'])->name('about.history.create');
        Route::post('/about/history',                [OurHistory::class, 'store'])->name('about.history.store');
        Route::get('/about/history/{id}/edit',       [OurHistory::class, 'edit'])->name('about.history.edit');
        Route::put('/about/history/{id}',            [OurHistory::class, 'update'])->name('about.history.update');
        Route::delete('/about/history/{id}',         [OurHistory::class, 'destroy'])->name('about.history.destroy');

        // Our History Country
        Route::get('/ourhistoryCountry',             [AdminPageController::class, 'ourCountry'])->name('ourCountry');
        Route::get('/ourhistoryCountry/create',      [AdminPageController::class, 'addOurCountry'])->name('ourCountry.create');
        Route::post('/ourhistoryCountry',            [OurHistoryCountryController::class, 'store'])->name('ourCountry.store');
        Route::get('/ourhistoryCountry/{id}/edit',   [OurHistoryCountryController::class, 'edit'])->name('ourCountry.edit');
        Route::put('/ourhistoryCountry/{id}',        [OurHistoryCountryController::class, 'update'])->name('ourCountry.update');
        Route::delete('/ourhistoryCountry/{id}',     [OurHistoryCountryController::class, 'destroy'])->name('ourCountry.destroy');
    });

Route::get('/login',  [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout',[AuthController::class, 'logout'])->name('logout');