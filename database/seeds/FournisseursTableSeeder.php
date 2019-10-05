<?php

use Illuminate\Database\Seeder;
use App\Fournisseur;

class FournisseursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $fournisseur = new Fournisseur();

        $fournisseur->nom = 'nehari';
	    $fournisseur->adresse = 'bensakran';
        $fournisseur->tel = '0770133110';
        
	    $fournisseur->email = 'mohwebss@gmail.com';
	    $fournisseur->save();

    $fournisseur = new Fournisseur();

        $fournisseur->nom = 'benmiloudi';
        $fournisseur->adresse = '400 log tlemcen';
        $fournisseur->tel = '0550130997';
        $fournisseur->email = 'zz@gmail.com';
        $fournisseur->save();

   $fournisseur = new Fournisseur();

        $fournisseur->nom = 'belmookhtar';
        $fournisseur->adresse = '400 log';
        $fournisseur->tel = '0660250196';
        $fournisseur->email = 'ahl@gmail.fr';
        $fournisseur->save();      
    }
}
