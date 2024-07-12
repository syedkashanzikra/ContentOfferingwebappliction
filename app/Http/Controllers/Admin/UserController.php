<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function destroy($id)
    {
        // Check the number of users in the database
        if (User::count() > 2) {
            // If more than two users exist, proceed with deletion
            User::findOrFail($id)->delete();
            return redirect()->route('admin.users.index')->with('success', 'User deleted successfully');
        } else {
            // If two or less users exist, do not delete and return a message
            return redirect()->route('admin.users.index')->with('error', 'Cannot delete user. A minimum of two users is required.');
        }
    }
}
