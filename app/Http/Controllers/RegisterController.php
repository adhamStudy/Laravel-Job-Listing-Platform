<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Hash the password
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Create the user
        $user = User::create($validatedData);

        // Redirect to the login page with a success message
        return redirect()->route('login')->with('success', 'You are registered and can now log in.');
    }

    public function register(): View
    {
        return view('auth.register');
    }
}
