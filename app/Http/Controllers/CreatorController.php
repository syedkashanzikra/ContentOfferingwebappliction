<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\creator_tables;
use Illuminate\Support\Facades\Hash;

class CreatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('creator.create');
    }


    public function showForm()
    {
        return view('creator.create');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'creator_name' => 'required|string|max:255',
            'creator_email' => 'required|email|max:255',
            'social_links' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'password' => 'required|string|min:8', // Validation for password
        ]);

        if ($request->hasFile('avatar')) {
            $avatarName = time() . '.' . $request->avatar->extension();
            $request->avatar->storeAs('avatars', $avatarName, 'public');
        }

        creator_tables::create([
            'creator_name' => $request->creator_name,
            'creator_email' => $request->creator_email,
            'social_links' => $request->social_links,
            'description' => $request->description,
            'avatar' => $avatarName,
            'password' => Hash::make($request->password), // Hashing password
        ]);

        return redirect()->route('creator.form')->with('success', 'Your Creator Account has been created Now Activate your Creator Account by Login as a Creator');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'creator_name' => 'required',
    //         'email' => 'required',
    //         'descriptions' => 'required',


    //     ]);

    //     $creator = new creator_tables;

    //     $creator->creator_name = $request->creator_name;
    //     $creator->creator_email = $request->creator_email;
    //     $creator->social_links = $request->social_links;
    //     $creator->description = $request->description;
    //     $creator->avatar = $request->avatar;



    //     $creator->save();



    //     return redirect()->route('');
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
