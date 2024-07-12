<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function becomeCreator()
    {
        if (Auth::check()) { // Check if the user is logged in
            $user = Auth::user();
            $user->role = 'creator'; // Change role to creator
            $user->save(); // Save the user with the new role

            return redirect('/creator-dashboard')->with('status', 'Congratulations! You are now a creator.');
        }

        return redirect('/login')->with('error', 'You need to log in to become a creator.');
    }



  
}
