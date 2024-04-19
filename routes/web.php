<?php

use App\Http\Controllers\ProfileController;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Livewire\Admin\Sections;
use App\Livewire\Chat\CreateChat;
use App\Livewire\Chat\Main;
use App\Livewire\Patient\DoctorList;
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



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ###############################chat route#################


    Route::get('/Doctors/list',CreateChat::class);
    Route::get('/Doctors/chat',Main::class);
    


// ############################################################################


require __DIR__.'/auth.php';

