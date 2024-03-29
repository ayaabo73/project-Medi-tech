<?php

use App\Http\Controllers\ProfileController;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Livewire\Chat\CreateChat;
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
    return view('Patient.patient-welcome');
});
Route::get('/re', function () {
    return view('auth.register');
});
Route::get('/dashboard/patient', function () {
    return view('Patient.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard.user');

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

// ###############################chat route#################

Route::get('list/doctors',CreateChat::class)->name('list.doctors');






// ############################################################################


require __DIR__.'/auth.php';

