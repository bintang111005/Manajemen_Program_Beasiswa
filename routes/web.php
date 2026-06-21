
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

    '/admin-login',

    function () {

        return view(

            'auth.admin-login'

        );

    }

);

Route::post(

    '/admin-login',

    [AuthController::class, 'adminLogin']

);

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
UPLOAD DOKUMEN
====================== */

Route::get(

    '/upload-document',

    function () {

        return view(

            'applications.upload'

        );

    }

);


/* ======================
SCHOLARSHIP
====================== */

Route::resource(

    'scholarships',

    ScholarshipController::class

);


/* ======================
APPLICATION
====================== */

Route::resource(

    'applications',

    ScholarshipApplicationController::class

);
Route::post(

    '/upload-document',

    [ScholarshipApplicationController::class, 'uploadDocuments']

);


/* ======================
DASHBOARD MAHASISWA
====================== */

Route::get(

    '/student',

    [ScholarshipApplicationController::class, 'studentDashboard']

);


Route::view(

    '/student/status',

    'student.status'

);


Route::view(

    '/student/announcement',

    'student.announcement'

);


/* ======================
DASHBOARD ADMIN
====================== */

Route::get(

    '/admin',

    [ScholarshipApplicationController::class, 'adminDashboard']

);
