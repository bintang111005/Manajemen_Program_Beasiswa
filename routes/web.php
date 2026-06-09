<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\ScholarshipApplicationController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource(
    'scholarships',
    ScholarshipController::class
);

Route::resource(
    'applications',
    ScholarshipApplicationController::class
);