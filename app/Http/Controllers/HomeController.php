<?php

namespace App\Http\Controllers;

use App\Models\Voyage;

class HomeController extends Controller
{
    public function index()
    {
        $voyages = Voyage::all();
        return view('home', compact('voyages'));
    }
}