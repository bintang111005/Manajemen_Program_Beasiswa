<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\ScholarshipApplicationController;

Route::get('/', function () {
    return view('public.home');
});

Route::get(
    '/program',
    function () {
        return view('public.scholarship');
    }
);

Route::get(
    '/faq',
    function () {
        return view('public.faq');
    }
);

Route::get(
    '/contact',
    function () {
        return view('public.contact');
    }
);

Route::resource(
    'scholarships',
    ScholarshipController::class
);

Route::resource(
    'applications',
    ScholarshipApplicationController::class
);

Route::view(
'/student',
'student.dashboard'
);

Route::view(
'/admin',
'admin.dashboard'
);