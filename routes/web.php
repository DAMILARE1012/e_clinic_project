<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Reception\ReceptionController;
use App\Http\Controllers\Reception\DoctorController;
use App\Http\Controllers\Specialist\SpecialistController;
use App\Http\Controllers\User\ComplaintController;
use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Admin Controller
// Route::get('/admin_dashboard', [AdminController::class, 'admin_dashboard'])->name('admin_dashboard');


// Pages Controller
Route::get('/', [PagesController::class, 'home'])->name('home');


Auth::routes();

Route::group(['as' => 'user.', 'prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth', 'user']], function () 
{
    Route::get('dashboard', [UserController::class, 'index'])->name('dashboard');
    
    // Request routes
    Route::get('make-request', [ComplaintController::class, 'createNewComplaint'])->name('make.complaint');
    Route::post('make-request', [ComplaintController::class, 'storeNewComplaint'])->name('make.complaint');
    Route::get('all-complaints', [ComplaintController::class, 'allComplaints'])->name('complaints');
    
    // profile update and medical history
    Route::get('profile-update', [ProfileController::class, 'editProfile'])->name('edit.profile');
    Route::post('profile-update', [ProfileController::class, 'updateProfile'])->name('update.profile');
    Route::get('profile', [ProfileController::class, 'editProfileA'])->name('edit.profileA');
    Route::post('update-profile', [ProfileController::class, 'updateProfileA'])->name('update.profileA');
    Route::get('medical-history', [ProfileController::class, 'MedicalHistory'])->name('medical.history');
    Route::get('check-medical-history', [ProfileController::class, 'editMedicalHistory'])->name('check.medical.history');
    Route::post('check-medical-history', [ProfileController::class, 'storeMedicalHistory'])->name('check.medical.history');

    // Appointments Route
    Route::get('select-appointment/{id}', [ComplaintController::class, 'selectAppointment'])->name('choose.appointment');
    Route::get('confirm-appointment/{id}', [ComplaintController::class, 'confirmAppointment'])->name('confirm.appointment');
});

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () 
{
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
});

Route::group(['as' => 'reception.', 'prefix' => 'reception', 'namespace' => 'Reception', 'middleware' => ['auth', 'reception']], function () 
{
    Route::get('dashboard', [ReceptionController::class, 'index'])->name('dashboard');
    Route::get('doctor', [DoctorController::class, 'index'])->name('doctor');
    Route::get('complaints', [ReceptionController::class, 'complaints'])->name('complaints');
    Route::get('complaint/{id}', [ReceptionController::class, 'complaintDetail'])->name('complaints.detail');

    Route::post('assign', [ReceptionController::class, 'assignSpecialist'])->name('assign.specialist');
    //profile
    Route::get('profile', [ProfileController::class, 'editProfileA'])->name('edit.profileA');
    Route::post('update-profile', [ProfileController::class, 'updateProfileA'])->name('update.profileA');

    Route::get('profile-update', [ProfileController::class, 'editProfile'])->name('edit.profile');
    Route::post('profile-update', [ProfileController::class, 'updateProfile'])->name('update.profile');
});

Route::group(['as' => 'specialist.', 'prefix' => 'specialist', 'namespace' => 'Specialist', 'middleware' => ['auth', 'specialist']], function () 
{
    Route::get('dashboard', [SpecialistController::class, 'index'])->name('dashboard');
    Route::get('profile', [ProfileController::class, 'editProfile'])->name('profile');
    Route::post('profile-update', [ProfileController::class, 'updateProfile'])->name('update.profile');
    
    // Assigned patients route
    Route::get('assigned-patients', [SpecialistController::class, 'getAssignedPatients'])->name('assigned.patients');
    Route::get('assigned-patient-detail/{id}', [SpecialistController::class, 'assignedDetail'])->name('assigned.detail');

    Route::get('my-appointments', [SpecialistController::class, 'myAppointments'])->name('appointments');
    Route::post('suggest-appointment', [SpecialistController::class, 'suggestAppointment'])->name('suggest.appointment');

    //profile
    Route::get('profile', [ProfileController::class, 'editProfileA'])->name('edit.profileA');
    Route::post('update-profile', [ProfileController::class, 'updateProfileA'])->name('update.profileA');
    
});

