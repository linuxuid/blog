<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class LinksPageController extends Controller
{
    public function index()
    {
        return view('links.links', [
            'links' => Link::all()
        ]);
    }

    public function create() 
    {
        return view('links.create');
    }

    public function store(Request $request)
    {

       $request->validate([
            'name' => 'required',
            'link' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:5048'
        ]);

        /**
         * filename and his ext
        */
        $filename = time() . '-' . $request->name . '.' . $request->image->extension();
        
         /**
          * directory
          */
        $request->image->move(public_path('images/links'), $filename);
        
        $link = Link::create([
            'name' => $request->input('name'),
            'link' => $request->input('link'),
            'body' => $request->input('body'),
            'image' => $filename
        ]);

        if($link) {
            return redirect()->route('links.links');
        }
    }   
}
