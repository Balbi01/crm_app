<?php

use App\Http\Controllers\ProspectController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Foundation\Application;

$prospectsPrefix = '/prospects';

Route::get('/prospects/index', [
    ProspectController::class,
    'index'
]);
