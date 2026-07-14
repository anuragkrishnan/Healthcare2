<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Login\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function authenticate(Request $request)
    {
        $result = User::findByUsername($request);

        if ($result === null) {
            return back()->with(
                'error',
                'User not found'
            )->withInput();
        }

        if ($result === false) {
            return back()
                ->with('error', 'Invalid password')
                ->withInput();
        }

        $user = $result['user'];

        //Using facades the user is looged into the application
        Auth::login($user);

        $request->session()->regenerate();

        switch ($user->role) {
            case 'admin':
                return redirect()->route('dashboard');

            case 'Doctor':
                return redirect()->route('doctor.dashboard');

            case 'Receptionist':
                return redirect()->route('receptionist.dashboard');

            default:
                Auth::logout();

                return back()->with('error', 'Unauthorized role.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('auth.login')
            ->with('success', 'Logged out successfully.');
    }
}
