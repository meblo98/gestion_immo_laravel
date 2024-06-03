<?php

namespace App\Http\Controllers;

use auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;



class AdminController extends Controller
{

    private $admin;
    public function __construct(){
        $this->admin= new User();
    }

    Public function ajouter(){
        return view('authentification.index');
    }
    public function creation(Request $request){
      $request->validate([
        'nom'=>['required','string'],
        'prenom'=>['required','string'],
        'email'=>['required','string'],
        'telephone'=>['required','integer'],
        'password'=>['required','min:8','confirmed'],
      ]);
     User::create($request->validated());
      return redirect()->route('authentification.index')->with('success', 'Article created successfully.');
    }
}
