<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginCheck(Request $request)
    {
        $user = User::where(
            'email',
            $request->email
        )->first();

        if(!$user){
            return back()->with(
                'error',
                'User not found'
            );
        }

        if(!Hash::check(
            $request->password,
            $user->password
        )){
            return back()->with(
                'error',
                'Invalid Password'
            );
        }

        session([
            'userId' => $user->id,
            'userName' => $user->name
        ]);

        return redirect('/dashboard');
    }
}