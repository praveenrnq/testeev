<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::sortable()->paginate(10);
        return view('posts.index',compact('posts'));
    }

    public function fileUpload()
    {
        return view('posts.file-upload');
    }

    public function postFileUpload(Request $request)
    {
        $request->validate([
            'file' => 'required',
		]);

        $fileName = 'File_'.time().'.'.request()->file->getClientOriginalExtension();
        request()->file->move(public_path('uploads'), $fileName);
        return response()->json(['success'=>'You have successfully uploaded file.']);
    }
}