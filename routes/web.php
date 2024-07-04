<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ProfileController;
use App\http\Controllers\FormListController;
use Illuminate\Support\Facades\Route;

// index
Route::get('/', function () {
    return view('welcome');
});

// dashboard
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::resource('dashboard', ProjectsController::class)->name('*', 'dashboard');
    Route::post('dashboard/{id}/changeToggleStatus', [ProjectsController::class, 'changeToggleStatus'])->name('dashboard.changeToggleStatus');
});

// profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// forms
Route::get('formlist', [FormListController::class, 'index'])->name('formlist.index');

require __DIR__ . '/auth.php';
