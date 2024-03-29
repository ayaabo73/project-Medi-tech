<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Route;

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
    return view('Admin.admin-welcome');
});

Route::get('/re', function () {
    return view('auth.register');
});
Route::get('/dashboard/upatient', function () {
    return view('Patirnt.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard.patirnt');

Route::get('/dashboard/admin', function () {
    return view('Admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('dashboard.admin');

Route::get('/dashboard/doctor', function () {
    return view('Doctor.dashboard');
})->middleware(['auth:doctor', 'verified'])->name('dashboard.doctor');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('sections',[AdminController::class,'sections'])->name('sections');

require __DIR__.'/auth.php';