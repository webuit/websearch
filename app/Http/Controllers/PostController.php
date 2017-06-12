<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // Thêm bài post
    public function getAddPost()
    {
    	return view('post.add_post');
    }
}
