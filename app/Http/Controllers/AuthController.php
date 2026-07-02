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


            $application = \App\Models\ScholarshipApplication::where(

                'user_id',

                auth()->id()

            )

                ->latest()

                ->first();


            $application = \App\Models\ScholarshipApplication::where(

                'user_id',

                auth()->id()

            )

                ->latest()

                ->first();


            if ($application) {

                return redirect(

                    '/student'

                );

            }


            return redirect(

                '/applications/create'

            );


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

        $admin = \App\Models\User::where('role', 'admin')->first();
        if (!$admin) {
            $admin = \App\Models\User::updateOrCreate(
                ['email' => 'admin@scholarhub.com'],
                [
                    'name' => 'Administrator',
                    'password' => \Illuminate\Support\Facades\Hash::make('123'),
                    'role' => 'admin',
                    'email_verified_at' => now(),
                ]
            );
        }

        if ($request->username == $admin->email || $request->username == 'admin') {
            if (\Illuminate\Support\Facades\Hash::check($request->password, $admin->password)) {
                session([
                    'admin' => true,
                    'admin_id' => $admin->id
                ]);
                return redirect('/admin');
            }
        }


        return back()

            ->withErrors([

                'username' =>

                    'Username atau password salah.'

            ]);

    }
    public function settings()
    {
        $admin = \App\Models\User::where('role', 'admin')->first();
        if (!$admin) {
            $admin = \App\Models\User::updateOrCreate(
                ['email' => 'admin@scholarhub.com'],
                [
                    'name' => 'Administrator',
                    'password' => \Illuminate\Support\Facades\Hash::make('123'),
                    'role' => 'admin',
                    'email_verified_at' => now(),
                ]
            );
        }
        return view('admin.settings', compact('admin'));
    }

    public function updateSettings(Request $request)
    {
        $admin = \App\Models\User::where('role', 'admin')->first();
        if (!$admin) {
            return back()->withErrors(['message' => 'Admin not found.']);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $admin->id,
            'password' => 'nullable|min:3',
        ]);

        $admin->name = $request->name;
        $admin->email = $request->email;

        if ($request->filled('password')) {
            $admin->password = \Illuminate\Support\Facades\Hash::make($request->password);
        }

        $admin->save();

        return back()->with('success', 'Pengaturan berhasil diperbarui!');
    }
}
