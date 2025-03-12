<?php

use App\Http\Controllers\PatientController;
use App\Livewire\Admin\CreateUser;
use App\Livewire\Admin\UsersIndex;
use App\Livewire\Patients\CreatePatient;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Appearance;
use Illuminate\Support\Facades\Route;
use App\Livewire\Patients\PatientsIndex;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

Route::middleware(['auth'])->group(function () {
   Route::get('admin/users', UsersIndex::class)->name('admin.users');
   Route::get('admin/create-user', CreateUser::class)->name('admin.create-user');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/patients', PatientsIndex::class)->name('patients.index');
    Route::get('/patients/create-patient', CreatePatient::class)->name('patients.create-patient');
    Route::get('/patients/{patient:slug}', [PatientController::class, 'show'])->name('patient.show');
 });



require __DIR__.'/auth.php';
