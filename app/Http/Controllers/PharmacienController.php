<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Validation\Rule;
use App\Illuminate\Http\uploadedFile;
use Illuminate\Support\Facades\Hash;


class PharmacienController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        $pharmaciens= User::all();
        return view ('backoffice.pharmaciens.index',['pharmaciens'=>$pharmaciens]);
    }
    
    public function show($id) {
     $pharmacien = User::find($id);

     return view('backoffice.pharmaciens.show',['pharmacien'=>$pharmacien]);

    }

    public function create()
    {
        return view ('backoffice.pharmaciens.create');
        
    }


    public function store(Request $request)
    {

        $request->validate([
            'nom' => 'required|string|alpha|max:255',
            'prenom' => 'required|string|alpha|max:255',
            'sexe' => ['required',Rule::in(['homme', 'femme'])],
            'datenaissance' => 'required|date',
            'tel' => 'required|string|max:10',
            'password' => 'required|string|min:6|confirmed',

        ]);

        $pharmacien=new User();
        $pharmacien->nom=$request->input('nom');
        $pharmacien->prenom=$request->input('prenom');
        $pharmacien->datenaissance=$request->input('datenaissance');
        $pharmacien->email=$request->input('email');
        $pharmacien->username=$request->input('username');
        $pharmacien->sexe=$request->input('sexe');
        $pharmacien->password=Hash::make($request->input('password'));       
        $pharmacien->tel=$request->input('tel');
        $pharmacien->adresse=$request->input('adresse');
        $pharmacien->ville=$request->input('ville');
        $pharmacien->postal=$request->input('postal');
                
        if ($request->hasFile('image'))
        {
            $file=$request->file('image');
            $e=$file->getClientOriginalExtension();
            $filename=time().'.'.$e;
            $file->move('uploads/pharmaciens/',$filename);
            $pharmacien->pic='uploads/pharmaciens/'.$filename;
        }
        
        

        $pharmacien->save();
        return redirect('admin/pharmaciens');
        
    }

    public function update(Request  $request, $id)
    {

        $request->validate([
            'nom' => 'required|string|alpha|max:255',
            'prenom' => 'required|string|alpha|max:255',
            'sexe' => ['required',Rule::in(['homme', 'femme'])],
            'datenaissance' => 'required|date',
            'tel' => 'required|string|max:10',
            'password' => 'required|string|min:6|confirmed',

        ]);
        $pharmacien =User::find($id);
 
        $pharmacien->nom=$request->input('nom');
        $pharmacien->prenom=$request->input('prenom');
        $pharmacien->datenaissance=$request->input('datenaissance');
        $pharmacien->email=$request->input('email');
        $pharmacien->username=$request->input('username');
        $pharmacien->sexe=$request->input('sexe');
        $pharmacien->password=Hash::make($request->input('password'));       
        $pharmacien->tel=$request->input('tel');
        $pharmacien->adresse=$request->input('adresse');
        $pharmacien->ville=$request->input('ville');
        $pharmacien->postal=$request->input('postal');
               
        if ($request->hasFile('image'))
        {
            $file=$request->file('image');
            $e=$file->getClientOriginalExtension();
            $filename=time().'.'.$e;
            $file->move('uploads/pharmaciens/',$filename);
            $pharmacien->pic='uploads/pharmaciens/'.$filename;
        }
        $pharmacien->save();
        
     
 
         return redirect('admin/pharmaciens');   //root de view index    
    }

    public function edit($id)
    {
        $pharmacien=User::find($id);
        return view('backoffice.pharmaciens.edit',['pharmacien'=>$pharmacien]);
    }
    public function destroy(Request $request,$id){
        $pharmacien=User::find($id);
        $pharmacien->delete();
        return redirect('admin/pharmaciens');
    }
}
