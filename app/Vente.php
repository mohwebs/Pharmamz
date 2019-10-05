<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function lot()
    {
        return $this->belongsTo('App\Lot','lot_id');
    }

}
