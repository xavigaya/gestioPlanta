<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function Con_company() 
    {
        return $this->belongsTo('App\Con_company');
    }
    
    public function Con_courtesy() 
    {
        return $this->belongsTo('App\Con_courtesy');
    }
}
