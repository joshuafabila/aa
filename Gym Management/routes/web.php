<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminDashboardController;


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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/programs', [PageController::class, 'programs'])->name('programs');
Route::get('/trainers', [PageController::class, 'trainers'])->name('trainers');
Route::get('/schedule', [PageController::class, 'schedule'])->name('schedule');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');


Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/users', [AdminDashboardController::class, 'manageUsers'])->name('admin.users');
Route::get('/admin/programs', [AdminDashboardController::class, 'managePrograms'])->name('admin.programs');
Route::get('/admin/trainers', [AdminDashboardController::class, 'manageTrainers'])->name('admin.trainers');
Route::get('/admin/schedule', [AdminDashboardController::class, 'manageSchedule'])->name('admin.schedule');

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'login'])->name('login.submit');