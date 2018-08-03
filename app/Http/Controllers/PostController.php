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
}
