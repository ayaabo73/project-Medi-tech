<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Admin\CreateDoctor;
use App\Livewire\Admin\CreateSection;
use App\Livewire\Admin\Doctors;
use App\Livewire\Admin\Sections;
use App\Livewire\Admin\UpdateDoctor;
use App\Livewire\Admin\UpdateSection;
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


Route::get('/dashboard/admin', function () {
    return view('Admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('dashboard.admin');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ################################################################

Route::middleware(['auth:admin'])->group(function () {
Route::get('/Sections',Sections::class);
Route::get('/create/section',CreateSection::class);
Route::get('/update/section/{id}',UpdateSection::class);
Route::get('/Doctor',Doctors::class);
Route::get('/create/doctor',CreateDoctor::class);
Route::get('/update/doctor/{id}',UpdateDoctor::class);
});

require __DIR__.'/auth.php';