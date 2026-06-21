<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function showRegister()
    {
        return view('auth.register');
    }


    public function showLogin(Request $request)
    {

        if ($request->has('program')) {

            session([

                'program' => $request->program

            ]);

        }

        return view('auth.login');

    }


    public function store(Request $request)
    {

        $request->validate([

            'name' => 'required|string|max:255',

            'email' => 'required|email|unique:users,email',

            'password' => 'required|min:6'

        ]);


        User::create([

            'name' => $request->name,

            'email' => $request->email,

            'password' => Hash::make(

                $request->password

            )

        ]);


        if ($request->filled('program')) {

            session([

                'program' => $request->program

            ]);

        }


        return redirect('/login')

            ->with(

                'success',

                'Registrasi berhasil, silakan login.'

            );

    }


    public function login(Request $request)
    {

        $credentials = $request->validate([

            'email' => 'required|email',

            'password' => 'required'

        ]);


        if ($request->filled('program')) {

            session([

                'program' => $request->program

            ]);

        }


        if (Auth::attempt($credentials)) {

            $request

                ->session()

                ->regenerate();


            return redirect(

                '/applications/create'

            );

        }


        return back()

            ->withErrors([

                'email' =>

                'Email atau password salah.'

            ])

            ->withInput();

    }


    public function logout(Request $request)
    {

        Auth::logout();

        $request

            ->session()

            ->invalidate();

        $request

            ->session()

            ->regenerateToken();

        return redirect('/');

    }
    public function adminLogin(Request $request)
{

    $request->validate([

        'username' => 'required',

        'password' => 'required'

    ]);


    if (

        $request->username == 'admin'

        &&

        $request->password == '123'

    ) {

        session([

            'admin' => true

        ]);


        return redirect(

            '/admin'

        );

    }


    return back()

    ->withErrors([

        'username' =>

        'Username atau password salah.'

    ]);

}

}
