<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use App\Models\Categorie;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function index()
    {
        $bookmarks = Bookmark::all();
        return view('home', ['bookmarks' => $bookmarks]);
    }

    public function newBookmark()
    {
        $categories = Categorie::all();
        return view('bookmarkForm', ['categories' => $categories]);
    }
}


