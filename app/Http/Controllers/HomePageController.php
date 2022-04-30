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
     * Contacts page /resources/home/contact.blade.php
     */
    public function contactMePage()
    {
        return view('home.contact');
    }
} 
