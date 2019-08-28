<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index(Request $request){
        return view('blog.index');
    }
}
