<?php

use App\Http\Controllers\Doctor\DoctorController;
use App\Http\Controllers\ProfileController;
use App\Livewire\Admin\Articles;
use App\Livewire\Admin\CreateArticles;
use App\Livewire\Admin\UpdateArticles;
use App\Livewire\Appointments\Appointment;
use App\Livewire\Appointments\AppointmentHour;
use App\Livewire\Appointments\ConfirmedAppointment;
use App\Livewire\Appointments\ExpiredAppointment;
use App\Livewire\Chat\CreateChat;
use App\Livewire\Chat\Main;
use App\Livewire\Doctor\Articles as DoctorArticles;
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
    return view('Doctor.doctor-welcome');
});

 
Route::get('/dashboard/doctor', [DoctorController::class, 'index'])
->middleware(['auth:doctor', 'verified'])->name('dashboard.doctor');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ###############################chat route#################

Route::middleware(['auth:doctor'])->group(function () {
Route::get('/Patients/list',CreateChat::class);
Route::get('/Patients/chat',Main::class);
Route::get('/Articles',DoctorArticles::class);
Route::get('/create/article',CreateArticles::class);
Route::get('/update/article/{id}',UpdateArticles::class);
Route::get('/Appointment',Appointment::class);
Route::get('/ConfirmedAppointment',ConfirmedAppointment::class);
Route::get('/ExpiredAppointment',ExpiredAppointment::class);
Route::get('/AppointmentHour',AppointmentHour::class);

});

// ############################################################################



require __DIR__.'/auth.php';
