<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(): View
    {
        return view('auth.login');
    }
    public function authenticate(Request $request): RedirectResponse
    {
        // Validate the incoming request data
        $credentials = $request->validate([

            'email' => 'required|string|email|max:100',
            'password' => 'required|string',
        ]);
        // Attepmt to authenticate user
        if (Auth::attempt($credentials)) {
            // Regenrate the session to prevent fixation attacks
            $request->session()->regenerate();

            return redirect()->intended(route('home'))->with('success', 'You are now log in ');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records'
        ])->onlyInput('email');
    }


    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Logout successfully');
    }
}
