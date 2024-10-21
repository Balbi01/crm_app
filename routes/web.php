<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Prospect\ProspectController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Mail\BalwareMailable;
use Illuminate\Support\Facades\Mail;

// require __DIR__ . '/prospects_routes.php';

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

/**
 * Rutas relacionadas a Prospectos
 */
// Carga de tabla principal de prospectos.
Route::get('/prospects/index', [
    ProspectController::class,
    'index'
])->name('prospectsIndex');

// Creación de un nuevo prospecto.
Route::post('prospects/create', [
    ProspectController::class,
    'createProspect'
])->name('createProspect');

/**
 * Rutas relacionadas a Usuarios
 */
Route::get('/users/index', [
    UserController::class,
    'index'
])->name('usersIndex');

Route::post('/users/create', [
    UserController::class,
    'createUser'
])->name('createUser');

require __DIR__ . '/auth.php';
