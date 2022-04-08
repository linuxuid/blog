<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Show all categories this route
     */
    public function index()
    {
        return view('articles.index', [
            'categories' => Category::all()
        ]);
    }
}
