<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    
    public function achat()
    {
        return $this->belongsTo('App\Achat','achat_id');
    }

    public function medicament()
    {
        return $this->belongsTo('App\Medicament','medicament_id');
    }

    public function ventes()
    {
        return $this->hasMany('App\Vente');
    }
}
