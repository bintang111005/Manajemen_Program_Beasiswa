
<?php

use Illuminate\Support\Facades\Route;
use App\Models\Scholarship;
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
/* ======================
ADMIN PROGRAM BEASISWA
====================== */

Route::get(

'/admin/program',

[ScholarshipController::class,'index']

);


Route::get(

'/admin/program/create',

[ScholarshipController::class,'create']

);


Route::post(

'/admin/program',

[ScholarshipController::class,'store']

);


Route::get(

'/admin/program/{scholarship}/edit',

[ScholarshipController::class,'edit']

);


Route::put(

'/admin/program/{scholarship}',

[ScholarshipController::class,'update']

);


Route::delete(

'/admin/program/{scholarship}',

[ScholarshipController::class,'destroy']

);


Route::get(

'/admin/applicants',

[ScholarshipApplicationController::class,'applicants']

);


Route::get(

    '/admin/verification',

    function () {

        return view(

            'admin.verification'

        );

    }

);


Route::get(

    '/admin/reports',

    function () {

        return view(

            'admin.reports'

        );

    }

);


Route::get(

    '/admin/settings',

    function () {

        return view(

            'admin.settings'

        );

    }

);
