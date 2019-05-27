<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\cvRequest;

use App\Article;
use App\Category;

use Auth;


class ArController extends Controller
{

    public function __construct(){

        $this->middleware('auth');

    }

	
    public function index(){

        if (Auth::user()->is_admin) {
            $listar = Article::all();


        }else{
            $listar = Auth::user()->articles;    
        }
         $cat = Category::all();
                            
    	return view('article.index', ['articles' => $listar, 'category' => $cat]);


    }
     //Affiche le formulaire de création des cvs
    public function create(){

    	$cat = Category::all();
    	return view('article.create', ['category' =>$cat]);
    }

    //Enregistre un cv dans BD
    public function store(cvRequest $request){
    	$article = new Article();
        $cat = new Category;
    	$article->title = $request-> input('title');
    	$article->content = $request->input('content');

    	if ($request->hasFile('photo')) {
            $article->photo = $request->file('photo')->store('images');
        }
        $article->user_id = Auth::user()->id;
         $article->category_id = $request-> input('cat');
         $article->video = $request->input('video');

    	$article->save();
        session()->flash('success', 'ton article a été bien enregistré !!');

    	return redirect('articles');
    }



    //permet un article puis le mettre dans le formulaire
    public function edit($id){
    	
    	$article = Article::find($id);
        $cat = Category::all();
        $this->authorize('update', $article);

    	return view('article.edit', ['article' => $article, 'category' =>$cat]);
    }

    //permet de modifier un article
    public function update(cvRequest $request, $id){

    	$article = Article::find($id);

    	$article->title = $request->input('title');
    	$article->content = $request->input('content');
        $article->video = $request->input('video');
        $article->category_id = $request-> input('cat');
        if ($request->hasFile('photo')) {
            $article->photo = $request->file('photo')->store('images');
        }
    	$article->save();

        session()->flash('success', 'Votre Article a été bien modifier !!');
    	return redirect('articles');
    }


    public function createCategory(){
        return view('category.categoryAdd');
    }
    public function storeCategory(cvRequest $request){
        $cat = new Category;
        $cat->name = $request->input('name');
        $cat->save();
        session()->flash('success', 'Votre Catégoré a été bien ajouter !!');
        return redirect('articles');
    }

    //permet de supprimer un article
    public function destroy(Request $request, $id){
    	 
    	 $article = Article::find($id);
         $this->authorize('delete', $article);
    	 $article->delete();

    	 return redirect('articles');


    }
    public function show($id){
        $listar = $article = Article::find($id);                               //ou Article::where('user_id', Auth::user()->id)->get();
        $this->authorize('view', $article);
        return view('article.show', ['article' => $listar]);
    }

     public function showCategory($id){
        
        $cat = Category::find($id);
         $category = Category::all();
                                       //ou Article::where('user_id', Auth::user()->id)->get();
        
        
        return view('category.showCategory', ['category' => $cat, 'cat' => $category]);
    }

  



  
}
