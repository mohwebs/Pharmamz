<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Achat;
use App\Fournisseur;

class AchatController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $achats = Achat::all();
        return view('backoffice.achats.index', ['achats' => $achats]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create()
    {
       $fournisseurs = Fournisseur::all();
        return view('backoffice/achats.create',['fournisseurs'=>$fournisseurs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     **/
    public function store(Request $request)
    {
        $achat = new Achat();
        $achat->date = $request->input('date');
        $achat->fournisseur_id = $request->input('fournisseur');
       
        
        $achat->save();
        
        session()->flash('success',' achat ajouté ');

        return redirect('admin/achats');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
    **/
        public function show($id)
    {
        $achat = Achat::find($id);

     return view('backoffice.achats.show',['achat'=>$achat]);
    }

/**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     **/
    public function edit($id)
    {            $achat = Achat::find($id);
        $fournisseurs = Fournisseur::all();


        return view('backoffice/achats.edit', ['achat' => $achat,'fournisseurs' => $fournisseurs]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     **/
   public function update(Request $request, $id)
    {
        $achat = Achat::find($id);
        $achat->date = $request->input('date');
        $achat->fournisseur_id = $request->input('fournisseur');
        

        
        $achat->save();
      
        session()->flash('success',' Achat Modifier ');

        return redirect('admin/achats');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        $achat = Achat::find($id);

        $achat->delete();
         return redirect('admin/achats');
    }
}
