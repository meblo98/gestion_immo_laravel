<?php

namespace App\Http\Controllers;

use App\Models\commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    protected $commentaire;
 public function __construct(){
    $this->commentaire=new commentaire;
 }


    public function commentaire(){
        $commentaires=commentaire::all();
        return view('biens.detail',compact('commentaires'));

    }
    public function ajouter(Request $request){
        commentaire::create($request->all());
        return back();


    }

    public function indexcommentaire(){

        $commentaires=commentaire::all();
        return view('biens.detail',compact('commentaires'));
    }

    public function indexCommenatire(){
        $commentaires = commentaire::latest()->take(6)->get();
        return view('admins.index', ['commentaires' => $commentaires]);
    }

}
