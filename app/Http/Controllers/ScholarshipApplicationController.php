<?php

namespace App\Http\Controllers;

use App\Models\ScholarshipApplication;
use Illuminate\Http\Request;
use App\Models\Scholarship;

class ScholarshipApplicationController extends Controller
{

    /**
     * Display a listing of the resource.
     */

    public function index()
    {

        $applications = ScholarshipApplication::latest()

            ->paginate(10);

        return view(

            'applications.index',

            compact('applications')

        );

    }


    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {

        return view(

            'applications.create'

        );

    }


    /**
     * Store a newly created resource.
     */


    public function store(Request $request)
    {

        $request->validate([

            'nim' => 'required',

            'major' => 'required',

            'jenjang' => 'required',

            'semester' => 'required',

            'gpa' => 'required',

            'phone' => 'required',

            'address' => 'required',

            'motivation_letter' => 'required'

        ]);


        $program = session('program');


        if ($program == 'akademik') {

            $scholarshipId = 1;

        } elseif ($program == 'non-akademik') {

            $scholarshipId = 2;

        } else {

            $scholarshipId = 3;

        }


        ScholarshipApplication::create([

            'scholarship_id' => $scholarshipId,

            'user_id' => auth()->id(),

            'program' => $program,

            'nim' => $request->nim,

            'major' => $request->major,

            'jenjang' => $request->jenjang,

            'semester' => $request->semester,

            'gpa' => $request->gpa,

            'family_income' => null,

            'phone' => $request->phone,

            'address' => $request->address,

            'motivation_letter' => $request->motivation_letter,

            'documents' => null,

            'status' => 'submitted'

        ]);


        return redirect(

            '/upload-document'

        );

    }

    public function uploadDocuments(Request $request)
{

    $request->validate([

        'photo' => 'required|file',

        'ktp' => 'required|file',

        'ktm' => 'required|file',

        'document_1' => 'required|file',

        'document_2' => 'required|file',

        'document_3' => 'nullable|file'

    ]);


    $application = ScholarshipApplication::where(

        'user_id',

        auth()->id()

    )

    ->latest()

    ->first();


    $photo = $request

        ->file('photo')

        ->store(

            'photo',

            'public'

        );


    $ktp = $request

        ->file('ktp')

        ->store(

            'ktp',

            'public'

        );


    $ktm = $request

        ->file('ktm')

        ->store(

            'ktm',

            'public'

        );


    $document1 = $request

        ->file('document_1')

        ->store(

            'documents',

            'public'

        );


    $document2 = $request

        ->file('document_2')

        ->store(

            'documents',

            'public'

        );


    $document3 = null;


    if (

        $request->hasFile(

            'document_3'

        )

    ) {

        $document3 = $request

            ->file(

                'document_3'

            )

            ->store(

                'documents',

                'public'

            );

    }


    $application->update([

        'photo' => $photo,

        'ktp' => $ktp,

        'ktm' => $ktm,

        'document_1' => $document1,

        'document_2' => $document2,

        'document_3' => $document3

    ]);


    return redirect(

        '/student'

    )

    ->with(

        'success',

        'Pendaftaran berhasil dikirim.'

    );

}



    /**
     * Display the specified resource.
     */

    public function show(

        ScholarshipApplication $application

    ) {

        return view(

            'applications.show',

            compact('application')

        );

    }


    /**
     * Show the form for editing.
     */

    public function edit(

        ScholarshipApplication $application

    ) {

        return view(

            'applications.edit',

            compact('application')

        );

    }


    /**
     * Update resource.
     */

    public function update(

        Request $request,

        ScholarshipApplication $application

    ) {

        $application->update([

            'status' => $request->status,

            'reviewed_at' => now()

        ]);


        return redirect()

            ->route(

                'applications.index'

            )

            ->with(

                'success',

                'Status berhasil diperbarui'

            );

    }

    public function studentDashboard()
{

    $application = ScholarshipApplication::where(

        'user_id',

        auth()->id()

    )

    ->latest()

    ->first();


    return view(

        'student.dashboard',

        compact('application')

    );

}


public function adminDashboard()
{

    $totalProgram = Scholarship::count();


    $totalPendaftar = ScholarshipApplication::count();


    $totalDiterima = ScholarshipApplication::where(

        'status',

        'awarded'

    )->count();


    $totalDitolak = ScholarshipApplication::where(

        'status',

        'rejected'

    )->count();


    return view(

        'admin.dashboard',

        compact(

            'totalProgram',

            'totalPendaftar',

            'totalDiterima',

            'totalDitolak'

        )

    );

}

    /**
     * Delete resource.
     */

    public function destroy(

        ScholarshipApplication $application

    ) {

        $application->delete();


        return redirect()

            ->route(

                'applications.index'

            )

            ->with(

                'success',

                'Data pendaftaran berhasil dihapus'

            );

    }

}
