<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;


class InscriptionController extends Controller
{

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function store(Request $request)
    {

        return User::create([
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'sexe' => $request->input('sexe'),
            'datenaissance' => $request->input('datenaissance'),
            'tel' => $request->input('tel'),

        ]);
        return redirect('admin');

        
    }
}
