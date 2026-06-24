<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    //dummy redirect
    public function showDashboard()
    {
        return redirect('/dashboard');
    }

    public function authenticate(Request $request)
    {
        $user = User::where(
            'username',
            $request->username
        )->first();

        if (!$user) {
            return back()->with(
                'error',
                'User not found'
            );
        }

        if (!Hash::check(
            $request->password,
            $user->password
        )) {
            return back()->with(
                'error',
                'Invalid Password'
            );
        }

        session([
            'userId' => $user->id,
            'userName' => $user->username
        ]);

        return redirect('/dashboard');
    }

    public function loginCheck(Request $request)
    {
        $user = User::where(
            'username',
            $request->username
        )->first();

        if (!$user) {
            return back()->with(
                'error',
                'User not found'
            );
        }

        if (!Hash::check(
            $request->password,
            $user->password
        )) {
            return back()->with(
                'error',
                'Invalid Password'
            );
        }

        session([
            'userId' => $user->id,
            'userName' => $user->username
        ]);

        return redirect('/dashboard');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login');
    }
}
