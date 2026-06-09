<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use App\Models\ScholarshipApplication;
use Illuminate\Http\Request;

class ScholarshipApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applications = ScholarshipApplication::with('scholarship')
            ->latest()
            ->paginate(10);

        return view('applications.index', compact('applications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $scholarships = Scholarship::where('status', 'open')->get();

        return view('applications.create', compact('scholarships'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'scholarship_id' => 'required',
            'nim' => 'required',
            'major' => 'required',
            'semester' => 'required',
            'gpa' => 'required',
            'motivation_letter' => 'required'
        ]);

        $documentPath = null;

        if ($request->hasFile('documents')) {
            $documentPath = $request
                ->file('documents')
                ->store('documents', 'public');
        }

        ScholarshipApplication::create([
            'scholarship_id' => $request->scholarship_id,
            'user_id' => auth()->id(),
            'nim' => $request->nim,
            'major' => $request->major,
            'semester' => $request->semester,
            'gpa' => $request->gpa,
            'family_income' => $request->family_income,
            'motivation_letter' => $request->motivation_letter,
            'documents' => $documentPath,
            'status' => 'submitted'
        ]);

        return redirect()
            ->route('applications.index')
            ->with('success', 'Pendaftaran berhasil dikirim');
    }

    /**
     * Display the specified resource.
     */
    public function show(ScholarshipApplication $application)
    {
        return view('applications.show', compact('application'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ScholarshipApplication $application)
    {
        return view('applications.edit', compact('application'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ScholarshipApplication $application)
    {
        $application->update([
            'status' => $request->status,
            'reviewed_at' => now()
        ]);

        return redirect()
            ->route('applications.index')
            ->with('success', 'Status berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ScholarshipApplication $application)
    {
        $application->delete();

        return redirect()
            ->route('applications.index')
            ->with('success', 'Data pendaftaran berhasil dihapus');
    }
}