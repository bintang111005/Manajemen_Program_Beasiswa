<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
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
AUTH
====================== */

Route::get(

    '/register',

    [AuthController::class, 'showRegister']

);


Route::post(

    '/register',

    [AuthController::class, 'store']

);


Route::get(

    '/login',

    [AuthController::class, 'showLogin']

);


Route::post(

    '/login',

    [AuthController::class, 'login']

);


/* ======================
FORM PENDAFTARAN
====================== */

Route::view(

    '/applications/create',

    'applications.create'

);


Route::view(

    '/applications/upload',

    'applications.upload'

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

    '/student/status',

    'student.status'

);


Route::view(

    '/student/announcement',

    'student.announcement'

);


Route::view(

    '/admin',

    'admin.dashboard'

);

Route::view(
    '/applications/create',
    'applications.create'
);

Route::view(
    '/applications/upload',
    'applications.upload'
);