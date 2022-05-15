<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class OutputTopicsController extends Controller
{
    /**
     * drugs topics
     */
    public function psychodelics($id)
    {
        return view('articles.psychodelic', [
            'articles' => Article::find($id)
        ]);
    }
}
