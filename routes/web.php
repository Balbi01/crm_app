<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Mail\BalwareMailable;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/crm/dashboard', function () {
    return Inertia::render('CRM/CrmDashboard');
})->middleware(['auth', 'verified'])->name('crm.crmDashboard');

Route::get('crm/test', function () {
    return Inertia::render('CRM/Test');
})->middleware(['auth', 'verified'])->name('crm.test');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/mailTest', function () {
    $mail = new BalwareMailable();
    Mail::to('omar.ibanez343@gmail.com')->send($mail);
    return 'Mail sent';
});

require __DIR__ . '/auth.php';
