<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Public routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/lp1', function () {
    return view('lp1');
});

// Auth Routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthenticationController::class, 'login'])->name('login.post');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [AuthenticationController::class, 'register'])->name('register.post');

// Logout route
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');
})->name('logout');

// Admin Routes (protected by auth middleware)
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/users', [DashboardController::class, 'users'])->name('admin.users');
    Route::get('/projects', [DashboardController::class, 'projects'])->name('admin.projects');
    Route::get('/skills', [DashboardController::class, 'skills'])->name('admin.skills');
    Route::get('/education', [DashboardController::class, 'education'])->name('admin.education');
    Route::get('/achievements', [DashboardController::class, 'achievements'])->name('admin.achievements');
    Route::get('/experiences', [DashboardController::class, 'experiences'])->name('admin.experiences');
});


// Public route
Route::get('/', function () {
    return view('welcome');
});

// Auth routes (উদাহরণস্বরূপ)
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Group middleware 'auth' দিয়ে প্রটেক্টেড এডমিন রুটস
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/users', [DashboardController::class, 'users'])->name('admin.users');
    Route::get('/projects', [DashboardController::class, 'projects'])->name('admin.projects');
    // skills, education, achievements, experiences... এক্ষেত্রে একই Controller ব্যবহার করতে পারো

    Route::get('/logout', function (Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    })->name('logout');
});
Route::middleware(['auth'])->prefix('admin')->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::post('/dashboard/update-profile', [DashboardController::class, 'updateProfile'])->name('admin.dashboard.updateProfile');
    Route::get('/users', [DashboardController::class, 'users'])->name('admin.users');
    Route::get('/projects', [DashboardController::class, 'projects'])->name('admin.projects');
    // অন্য রুট যোগ করো...
});
