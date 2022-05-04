<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Link;
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

    /**
     * search function for :
     *  categories
     *  articles
     *  links
     */
    public function search()
    {
        $category = Category::latest();
        $articles = Article::latest();
        $links = Link::latest();

        if($_GET['query']){
            $category
            ->where('name','LIKE', '%' . $_GET['query'] . '%')
            ->orWhere('description', 'LIKE', '%' . $_GET['query'] . '%');

            $articles
            ->where('name', 'LIKE', '%' . $_GET['query'] . '%')
            ->orWhere('excerpt', 'LIKE', '%' . $_GET['query']. '%');

            $links
            ->where('name', 'LIKE', '%' . $_GET['query'] . '%')
            ->orWhere('body', 'LIKE' , '%' . $_GET['query'] . '%');
        } 

        return view('search.search', [
            'categories' => $category->get(),
            'articles' => $articles->get(),
            'links' => $links->get()
        ]);
    }
} 
