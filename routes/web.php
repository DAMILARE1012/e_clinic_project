<?php

use App\Http\Controllers\PagesController;
// use App\Http\Controllers\AdminController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Reception\ReceptionController;
use App\Http\Controllers\Specialist\SpecialistController;

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

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about_us'])->name('about');
Route::get('/services', [PagesController::class, 'services'])->name('services');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/vet', [PagesController::class, 'veterinarian'])->name('veterinarian');
Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery');
Route::get('/pricing', [PagesController::class, 'pricing'])->name('pricing');
Route::get('/admin_dashboard', [AdminController::class, 'admin_dashboard'])->name('admin_dashboard');
Route::get('/user_login', [AdminController::class, 'signIn'])->name('signIn');
Route::get('/user_reg', [AdminController::class, 'signUp'])->name('signUp');

Auth::routes();

Route::group(['as' => 'user.', 'prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth', 'user']], function () 
{
    Route::get('dashboard', [UserController::class, 'index'])->name('dashboard');
});

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () 
{
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
});

Route::group(['as' => 'reception.', 'prefix' => 'reception', 'namespace' => 'Reception', 'middleware' => ['auth', 'reception']], function () 
{
    Route::get('dashboard', [ReceptionController::class, 'index'])->name('dashboard');
});

Route::group(['as' => 'specialist.', 'prefix' => 'specialist', 'namespace' => 'Specialist', 'middleware' => ['auth', 'specialist']], function () 
{
    Route::get('dashboard', [SpecialistController::class, 'index'])->name('dashboard');
});
