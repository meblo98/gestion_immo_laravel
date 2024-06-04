<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function compte(){
        return view('authentification/index');
    }
    //
    public function creerCompte(Request $request){
        $user=new User();
        $user->nom=$request->nom;
        $user->prenom=$request->prenom;
        $user->email=$request->email;
        $user->telephone=$request->telephone;
        $user->password=Hash::make($request->password);
        $user->save();
        return back()->with('success','compte créer avec sucess');
    }
}
