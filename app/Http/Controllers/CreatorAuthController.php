<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CreatorAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('creator.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'creator_email' => 'required|email', // Update the validation rule to use 'creator_email'
            'password' => 'required'
        ]);

        // Use 'creator_email' in the attempt method
        if (Auth::guard('creator')->attempt(['creator_email' => $request->creator_email, 'password' => $request->password])) {
            $request->session()->regenerate(); // This regenerates the session ID, which is good for security
            return redirect()->intended('creator.dashboard'); // Redirect to the creator's dashboard if successful
        }

        return back()->withErrors([
            'creator_email' => 'The provided credentials do not match our records.',
        ]);
    }
}
