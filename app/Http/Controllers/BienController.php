<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\commentaire;
use Illuminate\Http\Request;


class BienController extends Controller
{
    public $biens;

    public function __construct(){
        $this->biens = new Bien();
        
    }

    public function index(){
        $biens = Bien::all();
        return view('biens.index', ['biens' => $biens]);
        return view('admins.index', ['biens' => $biens]);
    }
    public function indexAdmin(){
        $biens = Bien::latest()->take(6)->get();
        $commentaires = commentaire::latest()->take(6)->get();
        return view('admins.index', ['biens' => $biens], ['commentaires' => $commentaires]);
    }

    public function indexBien(){
        $biens = Bien::all();
        return view('admins.bien', ['biens' => $biens]);
    }
    public function indexAdmin2(){
        $biens = Bien::all();
        return view('admins.index2', ['biens' => $biens]);

    }

    public function detail($id)
    {
        $posts=Bien::latest()->take(3)->get();
        $biens = Bien::find($id);
        $commentaires=commentaire::all()->where('bien_id',$id);

       
        return view('biens.detail', compact('biens','commentaires','posts'));


        return view('biens.detail', compact('biens','commentaires'));    }
    public function detailAdmin($id)
    {
        $posts=Bien::latest()->take(3)->get();
        $biens = Bien::find($id);
        return view('admins.index4', compact('biens'));
    }


    public function ajout(){
        return view ('biens.ajout');
    }

    public function creation(Request $request){
        $this->biens->create($request->all());
        return redirect()->back();
    }

    public function edit(string $id)
    {
        $response['biens'] = $this->biens->find($id);
        return view('admins.index3')->with($response);
    }

    public function modifier(Request $request, string $id)
    {
        $biens = $this->biens->find($id);
        $biens->update(array_merge($biens->toArray(), $request->toArray()));
        return redirect('admin2');
    }

    public function destroy(string $id)
    {
        $biens = $this->biens->find($id);
        $biens->delete();
        return redirect()->back();
    }
    public function posts(){
        $posts=Bien::latest()->take(3)->get();
        return view('biens.detail')->with($posts);
    }
}
