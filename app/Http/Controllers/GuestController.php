<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Article;
use App\Category;


class GuestController extends Controller
{
      public function showArticlesGuest(){

        $listar = Article::all();
        $cat = Category::all();
        return view('welcome', ['articles' => $listar, 'category' => $cat]);

    }
    public function showArticleFront($id){

    	 $listar = $article = Article::find($id);                               //ou Article::where('user_id', Auth::user()->id)->get();
        
        return view('frontArticle.showArticleFront', ['article' => $listar]);
    }
}
