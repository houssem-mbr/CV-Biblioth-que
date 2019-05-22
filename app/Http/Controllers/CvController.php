<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\UploadedFile;

use App\Http\Requests\cvRequest;

use App\Cv;

use Auth;


class CvController extends Controller
{

    public function __construct(){

        $this->middleware('auth');

    }

	//lister les cvs
    public function index(){

        if (Auth::user()->is_admin) {
            $listcv = Cv::all();
        }else{
            $listcv = Auth::user()->cvs;    
        }

    	                                //ou Cv::where('user_id', Auth::user()->id)->get();
    	return view('cv.index', ['cvs' => $listcv]);


    }
     //Affiche le formulaire de création des cvs
    public function create(){
    	return view('CV.create');
    }

    //Enregistre un cv dans BD
    public function store(cvRequest $request){
    	$cv = new Cv();
    	$cv->titre = $request-> input('titre');
    	$cv->presentation = $request->input('presentation');
        $cv->nomprenom = $request->input('nomprenom');
        $cv->domaine = $request->input('domaine');
        $cv->ecole = $request->input('ecole');
        $cv->phone = $request->input('phone');
        $cv->user_id = Auth::user()->id;
        if ($request->hasFile('photo')) {
            $cv->photo = $request->file('photo')->store('images');
        }

    	$cv->save();
        session()->flash('success', 'Le cv a été bien enregistré !!');

    	return redirect('cvs');
    }

    //permet un cv puis le mettre dans le formulaire
    public function edit($id){
    	
    	$cv = Cv::find($id);

        $this->authorize('update', $cv);

    	return view('CV.edit', ['cv' => $cv]);
    }

    //permet de modifier un cv
    public function update(cvRequest $request, $id){

    	$cv = Cv::find($id);

    	$cv->titre = $request->input('titre');
    	$cv->presentation = $request->input('presentation');
        $cv->nomprenom = $request->input('nomprenom');
        $cv->domaine = $request->input('domaine');
        $cv->ecole = $request->input('ecole');
        $cv->phone = $request->input('phone');
        if ($request->hasFile('photo')) {
            $cv->photo = $request->file('photo')->store('images');
        }
    	$cv->save();

        session()->flash('success', 'Votre Cv a été bien modifier !!');
    	return redirect('cvs');
    }

    //permet de supprimer un cv
    public function destroy(Request $request, $id){
    	 
    	 $cv = Cv::find($id);
         $this->authorize('delete', $cv);
    	 $cv->delete();

    	 return redirect('cvs');


    }
    public function show($id){
        $listcv = $cv = Cv::find($id);                               //ou Cv::where('user_id', Auth::user()->id)->get();
        $this->authorize('view', $cv);
        return view('CV.show', ['cv' => $listcv]);
    }
}
