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
}
