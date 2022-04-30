<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HowToStuffController extends Controller
{
    public function networkSecurity()
    {
        return view('howtostuff.anonymity');
    }

    public function hackingPage()
    {
        return view('howtostuff.hacking');
    }
}
