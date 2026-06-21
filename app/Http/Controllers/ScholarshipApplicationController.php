<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use App\Models\ScholarshipApplication;
use Illuminate\Http\Request;

class ScholarshipApplicationController extends Controller
{

    public function index()
    {

        return redirect(

            '/admin/applicants'

        );

    }


    public function create()
    {

        return view(

            'applications.create'

        );

    }


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


        $scholarshipId = session(

            'program'

        );


        $scholarship = Scholarship::find(

            $scholarshipId

        );


        ScholarshipApplication::create([

            'scholarship_id' => $scholarshipId,

            'user_id' => auth()->id(),

            'program' => $scholarship->name,

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


    public function show(

        ScholarshipApplication $application

    ) {

        return view(

            'admin.verification',

            compact(

                'application'

            )

        );

    }


    public function edit(

        ScholarshipApplication $application

    ) {

        return view(

            'applications.edit',

            compact(

                'application'

            )

        );

    }


    public function update(

        Request $request,

        ScholarshipApplication $application

    ) {

        $application->update([

            'status' => $request->status,

            'reviewed_at' => now()

        ]);


        return redirect(

            '/admin/applicants'

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

            compact(

                'application'

            )

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


    public function applicants()
    {

        $applications = ScholarshipApplication::with(

            'user'

        )

            ->latest()

            ->get();


        return view(

            'admin.applicants',

            compact(

                'applications'

            )

        );

    }


    public function verification()
    {

        $applications = ScholarshipApplication::with(

            'user'

        )

            ->where(

                'status',

                'submitted'

            )

            ->latest()

            ->get();


        return view(

            'admin.verification-list',

            compact(

                'applications'

            )

        );

    }


    public function destroy(

        ScholarshipApplication $application

    ) {

        $application->delete();


        return redirect(

            '/admin/applicants'

        )

            ->with(

                'success',

                'Data pendaftaran berhasil dihapus'

            );

    }

}
