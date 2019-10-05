<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lot;
use App\Medicament;
use App\Achat;

class LotController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $lots = Lot::all();
        return view('backoffice.lots.index', ['lots' => $lots]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create()
    {
       $achats = Achat::all();
       $medicaments = Medicament::all();
        return view('backoffice/lots.create',['achats'=>$achats,'medicaments'=>$medicaments]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     **/
    public function store(Request $request)
    {
        $lot = new lot();
        $lot->datefab = $request->input('datefab');
        $lot->dateper = $request->input('dateper');
        $lot->prix = $request->input('prix');
        $lot->qtachete = $request->input('qtachete');
        $lot->qtstock = $request->input('qtstock');
        $lot->medicament_id = $request->input('medicament');
        $lot->achat_id = $request->input('achat');
       
        
        $lot->save();
        
        session()->flash('success',' lot ajouté ');

        return redirect('admin/lots');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
    **/
        public function show($id)
    {
        $lot = lot::find($id);

     return view('backoffice.lots.show',['lot'=>$lot]);
    }

/**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     **/
    public function edit($id)
    {            $lot = lot::find($id);
        $achats = Achat::all();
        $medicaments = Medicament::all();

        return view('backoffice/lots.edit', ['lot' => $lot,'medicaments' => $medicaments,'achats' => $achats]);
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
        $lot = lot::find($id);
        $lot->datefab = $request->input('datefab');
        $lot->dateper = $request->input('dateper');
        $lot->prix = $request->input('prix');
        $lot->qtachete = $request->input('qtachete');
        $lot->qtstock = $request->input('qtstock');
        $lot->medicament_id = $request->input('medicament');
        $lot->achat_id = $request->input('achat');

        
        $lot->save();
      
        session()->flash('success',' lot Modifier ');

        return redirect('admin/lots');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        $lot = lot::find($id);

        $lot->delete();
         return redirect('admin/lots');
    }
}
