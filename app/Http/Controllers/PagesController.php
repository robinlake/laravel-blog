<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function About()
    {
        return view('pages/about');
    }

    public function Programs()
    {
        return view('pages/programs/programs');
    }
}
