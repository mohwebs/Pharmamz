<?php

namespace App\Http\Controllers;

use App\Medicament;
use Illuminate\Http\Request;

class MedicamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $medicaments = Medicament::all();
        return view('backoffice.medicaments.index', ['medicaments' => $medicaments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create()
    {
        return view('backoffice/medicaments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     **/
    public function store(Request $request)
    {
        $medicament = new Medicament();
        $medicament->nom = $request->input('nom');
        $medicament->dosage = $request->input('dosage');
        $medicament->forme = $request->input('forme');
        $medicament->famille = $request->input('famille');
        $medicament->stockmin = $request->input('stockmin');
        $medicament->remboursable = $request->input('remboursable');
        
        $medicament->save();
        
        session()->flash('success',' Médicament ajouté ');

        return redirect('admin/medicaments');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
    **/
        public function show($id)
    {
        $medicament = Medicament::find($id);

     return view('backoffice.medicaments.show',['medicament'=>$medicament]);
    }

/**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     **/
    public function edit($id)
    {            $medicament = Medicament::find($id);


        return view('backoffice/medicaments.edit', ['medicament' => $medicament]);
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
        $medicament = Medicament::find($id);
        $medicament->nom = $request->input('nom');
        $medicament->dosage = $request->input('dosage');
        $medicament->forme = $request->input('forme');
        $medicament->famille = $request->input('famille');
        $medicament->stockmin = $request->input('stockmin');
        $medicament->remboursable = $request->input('remboursable');
        

        
        $medicament->save();
      
        session()->flash('success',' Médicament Modifier ');

        return redirect('admin/medicaments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        $medicament = Medicament::find($id);

        $medicament->delete();
         return redirect('admin/medicaments');
    }
}
