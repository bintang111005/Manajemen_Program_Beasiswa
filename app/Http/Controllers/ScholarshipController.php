<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scholarships = Scholarship::latest()->paginate(10);

        return view('scholarships.index', compact('scholarships'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('scholarships.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:200',
            'provider' => 'required|max:100',
            'amount_monthly' => 'nullable|numeric',
            'requirements' => 'nullable',
            'start_period' => 'nullable|date',
            'end_period' => 'nullable|date',
            'deadline' => 'required|date',
            'quota' => 'required|integer',
            'description' => 'nullable',
            'status' => 'required'
        ]);

        Scholarship::create($request->all());

        return redirect()
            ->route('scholarships.index')
            ->with('success', 'Data beasiswa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Scholarship $scholarship)
    {
        return view('scholarships.show', compact('scholarship'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Scholarship $scholarship)
    {
        return view('scholarships.edit', compact('scholarship'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Scholarship $scholarship)
    {
        $request->validate([
            'name' => 'required|max:200',
            'provider' => 'required|max:100',
            'amount_monthly' => 'nullable|numeric',
            'requirements' => 'nullable',
            'start_period' => 'nullable|date',
            'end_period' => 'nullable|date',
            'deadline' => 'required|date',
            'quota' => 'required|integer',
            'description' => 'nullable',
            'status' => 'required'
        ]);

        $scholarship->update($request->all());

        return redirect()
            ->route('scholarships.index')
            ->with('success', 'Data beasiswa berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Scholarship $scholarship)
    {
        $scholarship->delete();

        return redirect()
            ->route('scholarships.index')
            ->with('success', 'Data beasiswa berhasil dihapus');
    }
}