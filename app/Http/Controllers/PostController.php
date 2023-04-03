<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public  function index(Request $request)
    {
        $post = BlogPost::find(1);
        $post->delete();
    }

    public function getPost ()
    {
        $post = BlogPost::find(2);
        print_r($post);
    }

}
