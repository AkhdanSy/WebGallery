<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

class PageController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('home', compact('galleries'));
    }
}
