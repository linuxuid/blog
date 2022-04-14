<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Show all categories this route
     */
    public function index()
    {
        return view('categories.index', [
            'categories' => Category::all()
        ]);
    }

    /**
     * create new category
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store new category
     */
    public function store(Request $request)
    {     
        /**
         * first off is validate
         */
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:5048'
        ]);

        /**
         * filename and his ext
         */
        $filename = time() . '-' . $request->name . '.' . $request->image->extension();

        /**
         * directory
         */
        $request->image->move(public_path('images'), $filename);

        // Category::create($attributes);
        $category = Category::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $filename
        ]);
        if($category){
            return redirect()->route('categories.index');
        }
    }
}
