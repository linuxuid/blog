<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OutputTopicsController extends Controller
{
    /**
     * Category of psychodelics
     */

    public function lsd()
    {
        return view('posts.psychodelics.lsd', [
            'articles' => Article::all()
        ]);
    }

    public function dmt()
    {
        return view('posts.psychodelics.dmt', [
            'articles' => Article::all()
        ]);
    }

    public function calciumBrome()
    {
        return view('posts.psychodelics.calcium', [
            'articles' => Article::all()
        ]);
    }

    public function mescaline()
    {
        return view('posts.psychodelics.mescaline', [
            'articles' => Article::all()
        ]);
    }

    public function psylocibin()
    {
        return view('posts.psychodelics.psylocibine', [
            'articles' => Article::all()
        ]);
    }

    public function nbome()
    {
        return view('posts.psychodelics.nbome', [
            'articles' => Article::all() 
        ]);
    }

    /**
     * Category of stimulators
     */

     public function ampthetamine()
     {
         return view('posts.stimulates.amth',[
            'articles' => Article::all() 
        ]);
     }

     public function methamphetamine()
     {
         return view('posts.stimulates.meth',[
            'articles' => Article::all() 
        ]);
     }

     public function mdma()
     {
         return view('posts.stimulates.mdma',[
            'articles' => Article::all() 
        ]);
     }

     public function cocaine()
     {
         return view('posts.stimulates.cocaine',[
            'articles' => Article::all() 
        ]);
     }

     public function mephedrone()
     {
         return view('posts.stimulates.mepth',[
            'articles' => Article::all() 
        ]);
     }

     /**
      * Category of opiates
      */

     public function heroine()
     {
        return view('posts.opiats.heroine',[
            'articles' => Article::all() 
        ]);
     }

     public function methadone()
     {
        return view('posts.opiats.methadone',[
            'articles' => Article::all() 
        ]);
     }

     public function morphine()
     {
        return view('posts.opiats.morphine',[
            'articles' => Article::all() 
        ]);
     }

     /**
      * Category of cannabinoids
      */

      public function marihujanna()
      {
        return view('posts.cannabinoids.marihujanna', [
            'articles' => Article::all()
        ]);
      }

      public function hashish()
      {
        return view('posts.cannabinoids.hashish', [
            'articles' => Article::all()
        ]);
      }

      public function synteticsCannabinoid()
      {
        return view('posts.cannabinoids.syntetics', [
            'articles' => Article::all()
        ]);
      }
}
