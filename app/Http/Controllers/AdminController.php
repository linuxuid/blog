<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Link;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'categories' => Category::all(),
            'articles' => Article::all(),
            'links' => Link::all()
        ]);
    }

    /**
     * delete functions
     * categories
     * articles
     * links
     */

    public function deleteCategories($id)
    {
        $categories = Category::find($id);

        $categories->delete();

        return redirect()->route('admin.index')->with('deleteCat','Категория была удалена');
    }

    public function deleteArticles($id)
    {
        $articles = Article::find($id);
    
        $articles->delete();

        return redirect()->route('admin.index')->with('deleteArt', 'Статья была удалена');
    }

    public function deleteLinks($id)
    {
        $links = Link::find($id);

        $links->delete();

        return redirect()->route('admin.index')->with('deleteLinks', 'Ссылка была удалена');
    }
}
