<?php

use Illuminate\Support\Facades\Route;

use App\Models\Scholarship;
use App\Models\ScholarshipApplication;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\ScholarshipApplicationController;


/* ======================
PUBLIC
====================== */

Route::get('/', function () {

    $scholarships = Scholarship::all();

    return view(

        'public.home',

        compact(

            'scholarships'

        )

    );

});


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


Route::post(

    '/logout',

    [AuthController::class, 'logout']

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


Route::get(

    '/student/status',

    [ScholarshipApplicationController::class, 'status']

);


Route::get(

    '/student/announcement',

    function () {

        $application = ScholarshipApplication::where(

            'user_id',

            auth()->id()

        )

            ->latest()

            ->first();


        return view(

            'student.announcement',

            compact(

                'application'

            )

        );

    }

);


/* ======================
DASHBOARD ADMIN
====================== */

Route::get(

    '/admin',

    [ScholarshipApplicationController::class, 'adminDashboard']

);


/* ======================
PROGRAM BEASISWA
====================== */

Route::get(

    '/admin/program',

    [ScholarshipController::class, 'index']

);


/* ======================
DATA PENDAFTAR
====================== */

Route::get(

    '/admin/applicants',

    [ScholarshipApplicationController::class, 'applicants']

);


/* ======================
VERIFIKASI BERKAS
====================== */

Route::get(

    '/admin/verification',

    [ScholarshipApplicationController::class, 'verification']

);


Route::get(

    '/admin/verification/{application}',

    [ScholarshipApplicationController::class, 'show']

);


/* ======================
LAPORAN
====================== */

Route::get(

    '/admin/reports',

    [ScholarshipApplicationController::class, 'reports']

);


/* ======================
PENGATURAN
====================== */

Route::get(

    '/admin/settings',

    [AuthController::class, 'settings']

);