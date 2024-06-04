<?php

namespace App\Http\Controllers;

use App\Models\Bien;
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
        return view('admin.index', ['biens' => $biens]);
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
        $biens = Bien::find($id);
        return view('bien.detail', compact('biens'));
    }
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
        return redirect('admin/bien');
    }

    public function destroy(string $id)
    {
        $biens = $this->biens->find($id);
        $biens->delete();
        return redirect('admin/bien');
    }
}
