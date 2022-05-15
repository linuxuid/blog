<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HowToStuffController extends Controller
{
    public function socialSecurity()
    {
        return view('howtostuff.anonymity');
    }

    public function hackingPage()
    {
        return view('howtostuff.hacking');
    }

    public function physical()
    {
        return view('howtostuff.physic');
    }

    public function drugs()
    {
        return view('howtostuff.drugs');
    }

    public function onion()
    {
        return view('howtostuff.onion');
    }
}
