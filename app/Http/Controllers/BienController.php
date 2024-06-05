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
        return view('bien.index', ['biens' => $biens]);
        return view('admin.index', ['biens' => $biens]);
    }
    public function indexAdmin(){
        $biens = Bien::latest()->take(6)->get();
        $commentaires = commentaire::latest()->take(6)->get();
        return view('admin.index', ['biens' => $biens], ['commentaires' => $commentaires]);
    }

    public function indexBien(){
        $biens = Bien::all();
        return view('admin.bien', ['biens' => $biens]);
    }
    public function indexAdmin2(){
        $biens = Bien::all();
        return view('admin.index2', ['biens' => $biens]);

    }

    public function detail($id)
    {
        $posts=Bien::latest()->take(3)->get();
        $biens = Bien::find($id);
        $commentaires=commentaire::all()->where('bien_id',$id);

       
        return view('bien.detail', compact('biens','commentaires','posts'));


        return view('bien.detail', compact('biens','commentaires'));    }
    public function detailAdmin($id)
    {
        $biens = Bien::find($id);
        return view('admin.index4', compact('biens'));
    }


    public function ajout(){
        return view ('bien.ajout');
    }

    public function creation(Request $request){
        $this->biens->create($request->all());
        return redirect()->back();
    }

    public function edit(string $id)
    {
        $response['biens'] = $this->biens->find($id);
        return view('admin.index3')->with($response);
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
        return view('bien.detail')->with($posts);
    }
}
