<?php

use App\Http\Controllers\Appointment as ControllersAppointment;
use App\Http\Controllers\Patient\PatientController;
use App\Http\Controllers\ProfileController;
use App\Livewire\Appointments\Appointment;
use App\Livewire\Appointments\Create;
use App\Livewire\Chat\CreateChat;
use App\Livewire\Chat\Main;
use App\Livewire\Diagnosis\Create as DiagnosisCreate;
use App\Livewire\Symptom\Create as SymptomCreate;
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


Route::get('/', [PatientController::class, 'index']);
Route::get('/Sections', [PatientController::class, 'index']);

Route::get('/re', function () {
    return view('auth.register');
});
Route::get('/dashboard/patient', [PatientController::class, 'dashboard'])
->middleware(['auth', 'verified'])->name('dashboard.user');

Route::get('/Articale', [PatientController::class, 'artical']);

Route::get('/ContactUs', function () {
    return view('Patient.ContactUs');
});
Route::get('/appointment',[ControllersAppointment::class, 'index']);






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ###############################chat route#################


    Route::get('/Doctors/list',CreateChat::class);
    Route::get('/Doctors/chat',Main::class);
    
  

// ############################################################################
Route::get('/Doctors',Create::class);
Route::get('/Diagnosis',DiagnosisCreate::class);

require __DIR__.'/auth.php';

