<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        // Eager load the 'creator' relationship to optimize queries
        $contents = Content::with('creator')->get();
        return view('admin.contents.index', compact('contents'));
    }

    public function destroy($id)
    {
        Content::findOrFail($id)->delete();
        return redirect()->route('admin.contents.index')->with('success', 'Content deleted successfully.');
    }
}
