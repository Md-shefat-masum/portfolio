<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogchController extends Controller
{
    public function index(Request $request){
        return view('admin.ch.index');
    }
}
