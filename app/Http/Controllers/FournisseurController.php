<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fournisseur;
use Illuminate\Validation\Rule;
use App\Illuminate\Http\uploadedFile;
use Illuminate\Support\Facades\Hash;

class FournisseurController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        $fournisseurs= Fournisseur::all();
        return view ('backoffice.fournisseurs.index',['fournisseurs'=>$fournisseurs]);
    }
    
    public function show($id) {
     $fournisseur = Fournisseur::find($id);

     return view('backoffice.fournisseurs.show',['fournisseur'=>$fournisseur]);

    }

    public function create()
    {
        return view ('backoffice.fournisseurs.create');
        
    }


    public function store(Request $request)
    {

        $request->validate([
            'nom' => 'required|string|alpha|max:255',
           
            'tel' => 'required|string|max:10',
           

        ]);

        $fournisseur=new Fournisseur();
        $fournisseur->nom=$request->input('nom');
     
        $fournisseur->email=$request->input('email');
        
        $fournisseur->tel=$request->input('tel');
        $fournisseur->adresse=$request->input('adresse');
        $fournisseur->ville=$request->input('ville');
        $fournisseur->postal=$request->input('postal');
                
      
        
        

        $fournisseur->save();
        return redirect('admin/fournisseurs');
        
    }

    public function update(Request  $request, $id)
    {

        $request->validate([
            'nom' => 'required|string|alpha|max:255',
           
            'tel' => 'required|string|max:10',

        ]);
        $fournisseur =Fournisseur::find($id);
        $fournisseur->nom=$request->input('nom');
     
        $fournisseur->email=$request->input('email');
        
        $fournisseur->tel=$request->input('tel');
        $fournisseur->adresse=$request->input('adresse');
        $fournisseur->ville=$request->input('ville');
        $fournisseur->postal=$request->input('postal');
        $fournisseur->save();
        
     
 
         return redirect('admin/fournisseurs');   //root de view index    
    }

    public function edit($id)
    {
        $fournisseur=Fournisseur::find($id);
        return view('backoffice.fournisseurs.edit',['fournisseur'=>$fournisseur]);
    }
    public function destroy(Request $request,$id){
        $fournisseur=Fournisseur::find($id);
        $fournisseur->delete();
        return redirect('admin/fournisseurs');
    }
}
