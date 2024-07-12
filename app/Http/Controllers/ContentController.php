<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::where('creator_id', Auth::id())->get();
        return view('contents.index', compact('contents'));
    }

    public function create()
    {
        return view('contents.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'post_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'post_video' => 'nullable|file|mimes:mp4,mov,ogg,qt|max:20000', // 20 MB
        ]);

        $content = new Content($request->all());
        $content->creator_id = Auth::id(); // Set the creator_id to the current user's ID

        if ($request->hasFile('post_picture')) {
            $pictureName = time() . '_picture.' . $request->post_picture->extension();
            $request->post_picture->move(public_path('contentassets'), $pictureName);
            $content->post_picture = 'contentassets/' . $pictureName;
        }

        if ($request->hasFile('post_video')) {
            $videoName = time() . '_video.' . $request->post_video->extension();
            $request->post_video->move(public_path('contentassets'), $videoName);
            $content->post_video = 'contentassets/' . $videoName;
        }

        $content->save();

        return redirect()->route('creater.dashboard')->with('success', 'Content created successfully.');
    }


    public function show(Content $content)
    {
        return view('contents.show', compact('content'));
    }

    public function edit(Content $content)
    {
        return view('contents.edit', compact('content'));
    }

    public function update(Request $request, Content $content)
    {
        // Similar validation and file handling as in store()
        // Update logic here
    }

    public function destroy(Content $content)
    {
        $content->delete();
        return redirect()->route('contents.index')->with('success', 'Content deleted successfully.');
    }
}
