<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPostsController extends Controller
{
    public function index(){

        return view('blogposts.blogposts');
    }
}
