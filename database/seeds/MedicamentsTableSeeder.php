<?php

use Illuminate\Database\Seeder;
use App\Medicament;

class MedicamentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
     $medicament = new Medicament();

        $medicament->nom = 'Doliprane';
	    $medicament->dosage = '1000 mg';
	    $medicament->forme = 'sachet';
	    $medicament->famille = 'antalgique';
	    $medicament->stockmin = '5';
	    $medicament->remboursable = true;
	    $medicament->save();

	  $medicament = new Medicament();

        $medicament->nom = 'Smecta';
	    $medicament->dosage = '3 g';
	    $medicament->forme = 'sachet';
	    $medicament->famille = 'pansement digestif';
	    $medicament->stockmin = '7';
	    $medicament->remboursable = false;
	    $medicament->save();
	    
	$medicament = new Medicament();

        $medicament->nom = 'Gripex';
	    $medicament->dosage = '50 mg';
	    $medicament->forme = 'gélule';
	    $medicament->famille = 'antalgique';
	    $medicament->stockmin = '0';
	    $medicament->remboursable = true;
	    $medicament->save();
	    
	$medicament = new Medicament();

        $medicament->nom = 'Rhumafed';
	    $medicament->dosage = '2,5 mg/50 mg/300 mg';
	    $medicament->forme = 'comprimé';
	    $medicament->famille = 'antihistaminique';
	    $medicament->stockmin = '10';
	    $medicament->remboursable = true;
	    $medicament->save();
	    
	$medicament = new Medicament();

        $medicament->nom = 'Zostine';
	    $medicament->dosage = '20 mg';
	    $medicament->forme = 'comprimé';
	    $medicament->famille = 'statine';
	    $medicament->stockmin = '3';
	    $medicament->remboursable = true;
	    $medicament->save();
	    
	$medicament = new Medicament();

        $medicament->nom = 'Efferalgan';
	    $medicament->dosage = '1 g';
	    $medicament->forme = 'comprime';
	    $medicament->famille = 'antipyrétique';
	    $medicament->stockmin = '5';
	    $medicament->remboursable = true;
	    $medicament->save();
	    
	$medicament = new Medicament();

        $medicament->nom = 'Dafalgan';
	    $medicament->dosage = '1000 mg';
	    $medicament->forme = 'comprimé';
	    $medicament->famille = 'antalgique';
	    $medicament->stockmin = '1';
	    $medicament->remboursable = true;
	    $medicament->save();
	    
	$medicament = new Medicament();

        $medicament->nom = 'Humex';
	    $medicament->dosage = '500 mg/60 mg';
	    $medicament->forme = 'comprimé';
	    $medicament->famille = 'vasocontricteur';
	    $medicament->stockmin = '4';
	    $medicament->remboursable = true;
	    $medicament->save();
	    
	$medicament = new Medicament();

        $medicament->nom = 'Panadol';
	    $medicament->dosage = '500 mg';
	    $medicament->forme = 'comprimé';
	    $medicament->famille = 'antipyrétique';
	    $medicament->stockmin = '1';
	    $medicament->remboursable = true;
	    $medicament->save();
	    
	$medicament = new Medicament();

        $medicament->nom = 'Actifed';
	    $medicament->dosage = '60 mg/500 mg';
	    $medicament->forme = 'comprimé';
	    $medicament->famille = 'vasocontricteur';
	    $medicament->stockmin = '1';
	    $medicament->remboursable = true;
	    $medicament->save();                                   

    }
}    	    