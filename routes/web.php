<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Reception\ReceptionController;
use App\Http\Controllers\Reception\DoctorController;
use App\Http\Controllers\Specialist\SpecialistController;
use App\Http\Controllers\User\ComplaintController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AppointmentController;
use App\Http\Middleware\CheckMedicalCheckUpdated;
use App\Http\Middleware\CheckProfileUpdated;
use App\Events\NewChatRoomMessage;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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
Route::get('/about_us', [PagesController::class, 'about_us'])->name('about_us');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

Auth::routes();

// Email Verification Handler
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('user.dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

//sending email verification
Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

//resending the verification email
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Customer Routes
Route::group(['as' => 'user.', 'prefix' => 'user', 'namespace' => 'User', 'middleware' => ['verified', 'auth', 'user']], function ()

{
    Route::get('dashboard', [UserController::class, 'index'])->name('dashboard');

    // Request routes
    Route::middleware( [CheckProfileUpdated::class])->group(function(){
        Route::middleware( [CheckMedicalCheckUpdated::class])->group(function(){

            Route::get('make-request', [ComplaintController::class, 'createNewComplaint'])->name('make.complaint');
            Route::post('make-request', [ComplaintController::class, 'storeNewComplaint'])->name('make.complaint');
            Route::get('all-complaints', [ComplaintController::class, 'allComplaints'])->name('complaints');
        });
    });

    // Profile Update
    Route::get('profile-update', [ProfileController::class, 'editProfile'])->name('edit.profile');
    Route::post('profile-update', [ProfileController::class, 'updateProfile'])->name('update.profile');

    Route::middleware( [CheckProfileUpdated::class])->group(function(){
        Route::middleware( [CheckMedicalCheckUpdated::class])->group(function(){

            // View Medical History
            Route::get('medical-check', [ProfileController::class, 'MedicalCheck'])->name('medical.checks');
        });
    });
    //Medical History
    Route::get('medical-checks', [ProfileController::class, 'editMedicalHistory'])->name('check.medical.checks');
    Route::post('medical-checks', [ProfileController::class, 'storeMedicalHistory'])->name('check.medical.checks');

    // Appointments Route
    Route::get('select-appointment/{id}', [ComplaintController::class, 'selectAppointment'])->name('choose.appointment');
    Route::get('confirm-appointment/{id}', [ComplaintController::class, 'confirmAppointment'])->name('confirm.appointment');



});

// Admin Routes
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function ()
{
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');

    // Account routes
    Route::get('users', [AdminController::class, 'users'])->name('users');
    Route::get('specialists', [AdminController::class, 'specialists'])->name('specialists');
    Route::get('admins', [AdminController::class, 'admins'])->name('admins');
    Route::get('add-account', [AdminController::class, 'createNewAccount'])->name('add.account');
    Route::post('add-account', [AdminController::class, 'addAccount'])->name('store.account');
    Route::get('edit-account/{id}', [AdminController::class, 'editAccount'])->name('edit.account');
    Route::post('update-account/{id}', [AdminController::class, 'updateAccount'])->name('update.account');


});

// Triage Routes
Route::group(['as' => 'reception.', 'prefix' => 'reception', 'namespace' => 'Reception', 'middleware' => ['auth', 'reception']], function ()
{
    Route::get('dashboard', [ReceptionController::class, 'index'])->name('dashboard');
    Route::get('doctor', [DoctorController::class, 'index'])->name('doctor');
    Route::get('complaints', [ReceptionController::class, 'complaints'])->name('complaints');
    Route::get('complaint/{id}', [ReceptionController::class, 'complaintDetail'])->name('complaints.detail');

    Route::post('assign', [ReceptionController::class, 'assignSpecialist'])->name('assign.specialist');

    // Profile update
    Route::get('profile-update', [ProfileController::class, 'editProfile'])->name('edit.profile');
    Route::post('profile-update', [ProfileController::class, 'updateProfile'])->name('update.profile');
});

// Specialist Routes
Route::group(['as' => 'specialist.', 'prefix' => 'specialist', 'namespace' => 'Specialist', 'middleware' => ['auth', 'specialist']], function ()
{
    Route::get('dashboard', [SpecialistController::class, 'index'])->name('dashboard');

    // Assigned patients route
    Route::get('assigned-patients', [SpecialistController::class, 'getAssignedPatients'])->name('assigned.patients');
    Route::get('assigned-patient-detail/{id}', [SpecialistController::class, 'assignedDetail'])->name('assigned.detail');

    Route::get('my-appointments', [SpecialistController::class, 'myAppointments'])->name('appointments');
    Route::post('suggest-appointment', [SpecialistController::class, 'suggestAppointment'])->name('suggest.appointment');

    // Profile update
    Route::get('profile-update', [ProfileController::class, 'editProfile'])->name('edit.profile');
    Route::post('profile-update', [ProfileController::class, 'updateProfile'])->name('update.profile');

});

// General Password Change
Route::get('change-password', [ProfileController::class, 'changePassword'])->middleware('auth')->name('change.password');
Route::post('change-password', [ProfileController::class, 'updatePassword'])->middleware('auth')->name('update.password');

// ChatRoom
Route::get('chat/{roomId}', [AppointmentController::class, 'chat'])->middleware('auth')->name('chat.room');

Route::get('chat/rooms', [AppointmentController::class, 'chatRoom'])->middleware('auth');;
Route::get('chat/room/{roomId}/messages', [AppointmentController::class, 'messages'])->middleware('auth');;
Route::post('chat/room/{roomId}/message', [AppointmentController::class, 'newMessage'])->middleware('auth');;
