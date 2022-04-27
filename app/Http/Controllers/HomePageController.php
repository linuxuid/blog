<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    /**
     * Rules page /resources/home/rules.blade.php
     */
    public function rulesPage()
    {
        return view('home.rules');
    }

    /**
     * Contacts page /resources/home/contact.blade.php
     */
    public function contactMePage()
    {
        return view('home.contact');
    }
} 
