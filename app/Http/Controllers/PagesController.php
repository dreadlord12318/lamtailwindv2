<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex() {

        $posts = Post::orderBy('created_at', 'desc')->paginate(6);
        $categories = Category::all();
        
        return view('blog')->withPosts($posts)->withCategories($categories);
    }
}
