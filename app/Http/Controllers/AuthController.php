<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function compte(){
        return view('authentification/index');
    }
    //
    public function creerCompte(Request $request){
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'telephone' => 'required|string|max:15',
            'password' => 'required|string|min:8|confirmed',
        ],
         [
            'nom.required' => 'Le nom est obligatoire.',
            'prenom.required' => 'Le prénom est obligatoire.',
            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'L\'email doit être une adresse valide.',
            'email.unique' => 'Cet email est déjà utilisé.',
            'telephone.required' => 'Le numéro de téléphone est obligatoire.',
            'password.required' => 'Le mot de passe est obligatoire.',
            'password.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
            'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
        ]);
        $user=new User();
        $user->nom=$request->nom;
        $user->prenom=$request->prenom;
        $user->email=$request->email;
        $user->telephone=$request->telephone;
        $user->password=Hash::make($request->password);
        $user->save();
        return view('authentification.connexion')->with('success','compte créer avec sucess');
    }
    public function connexion(){
        return view('authentification.connexion');
    }
    public function seconnexion(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $credentials=[
            'email' => $request->email,
            'password'=>$request->password,
        ];
        if(Auth::attempt($credentials)){
           return redirect()->route('ajout')->with('success','Connexion');

        }else{
            return back()->with('error','Email ou mots de passe incorrect');
        }
       
        
    }
    public function deconnexion(){
        Auth::logout();
        return view('authentification.connexion');
    }
}
