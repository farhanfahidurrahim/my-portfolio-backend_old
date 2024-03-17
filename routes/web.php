<?php

use App\Http\Controllers\Backend\HomeSectionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
/* ======================================================================== */

/*
|--------------------------------------------------------------------------
| Frontend User Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('frontend.index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Backend Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /*
    * Home Section Routes...
    */
    Route::resource('home-section', HomeSectionController::class);
    Route::post('hs/store/by-ajax', [HomeSectionController::class, 'storeByAjax'])->name('hs.store.ajax');
});

require __DIR__ . '/auth.php';