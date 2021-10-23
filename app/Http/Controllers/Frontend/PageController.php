<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function package()
    {
        return view('frontend.package');
    }

    public function supporting()
    {
        return view('frontend.supporting');
    }
}
