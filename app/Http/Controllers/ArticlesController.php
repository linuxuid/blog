<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index($id)
    {
        return view('articles.index', [
            'categories' => Category::find($id), // open article according to his `id` 
        ]);
    }

    public function allArticlesPage()
    {
        return view('articles.allarticles', [
            'articles' => Article::all()
        ]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        /**
         * validate
         */
        $request->validate([
            'name' => 'required',
            'excerpt' => 'required',
            'slug' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:5048',
            'category_id' => 'required'
        ]);

        /**
         * filename and his ext
         */
        $filename = time() . '-' . $request->name . '.' . $request->image->extension();


        /**
         * directory
         */
        $request->image->move(public_path('images'), $filename);

        $article = Article::create([
            'name' => $request->input('name'),
            'excerpt' => $request->input('excerpt'),
            'slug' => $request->input('slug'),
            'image' => $filename,
            'category_id' => $request->input('category_id')
        ]);

        if($article){
            return redirect()->route('articles.index', ['id' => $article->id]);
        }
    }

    public function show($id)
    {
        return view('articles.show', [
            'articles' => Article::find($id)
        ]);
    }
}

