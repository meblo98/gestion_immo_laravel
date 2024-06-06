<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    protected $commentaire;
 public function __construct(){
    $this->commentaire=new Commentaire;
 }


    public function commentaire(){
        $commentaires=Commentaire::all();
        return view('bien.detail',compact('commentaires'));

    }
    public function ajouter(Request $request){
        Commentaire::create($request->all());
        return back();


    }

    public function indexcommentaire($id){

        $commentaires=Commentaire::all($id);
        return view('bien.detail',compact('commentaires'));
    }

    public function indexCommenatire(){
        $commentaires = Commentaire::latest()->take(6)->get();
        return view('admin.index', ['commentaires' => $commentaires]);
    }

}
