<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{

    /**
     * Menampilkan daftar program beasiswa
     */

    public function index()
    {

        $scholarships = Scholarship::latest()

            ->get();


        return view(

            'admin.program',

            compact(

                'scholarships'

            )

        );

    }


    /**
     * Menampilkan form tambah program
     */

    public function create()
    {

        return view(

            'scholarships.create'

        );

    }


    /**
     * Menyimpan program baru
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


        Scholarship::create(

            $request->all()

        );


        return redirect(

            '/admin/program'

        )

        ->with(

            'success',

            'Program berhasil ditambahkan.'

        );

    }


    /**
     * Menampilkan detail program
     */

    public function show(Scholarship $scholarship)
    {

        return view(

            'scholarships.show',

            compact(

                'scholarship'

            )

        );

    }


    /**
     * Menampilkan form edit
     */

    public function edit(Scholarship $scholarship)
    {

        return view(

            'scholarships.edit',

            compact(

                'scholarship'

            )

        );

    }


    /**
     * Update data program
     */

    public function update(

        Request $request,

        Scholarship $scholarship

    )
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


        $scholarship->update(

            $request->all()

        );


        return redirect(

            '/admin/program'

        )

        ->with(

            'success',

            'Program berhasil diperbarui.'

        );

    }


    /**
     * Menghapus program
     */

    public function destroy(Scholarship $scholarship)
    {

        $scholarship->delete();


        return redirect(

            '/admin/program'

        )

        ->with(

            'success',

            'Program berhasil dihapus.'

        );

    }

}
