<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\ScholarshipApplicationController;


/* ======================
PUBLIC
====================== */

Route::get('/', function () {
    return view('public.home');
});

Route::view(
    '/program',
    'public.scholarship'
);

Route::view(
    '/faq',
    'public.faq'
);

Route::view(
    '/contact',
    'public.contact'
);


/* ======================
RESOURCE
====================== */

Route::resource(
    'scholarships',
    ScholarshipController::class
);

Route::resource(
    'applications',
    ScholarshipApplicationController::class
);


/* ======================
DASHBOARD
====================== */

Route::view(
    '/student',
    'student.dashboard'
);

Route::view(
    '/admin',
    'admin.dashboard'
);