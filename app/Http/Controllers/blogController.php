<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index(Request $request){
        return view('blog.index');
    }

    public function programming(Request $request){

    }

    public function lifestyle(Request $request){

    }

    public function blog_details(Request $request){
        return view('blog.blog_details');
    }

    public function all_blog(Request $request){
        return view('blog.all_blog');
    }

    public function search(Request $request){
        return view('blog.search');
    }
}
