<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('guests.index');
    }
    public function About()
    {
        return view('guests.about');
    }
    public function Contacts()
    {
        return view('guests.contacts');
    }
}
