<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtikelRohani extends Model
{
    public function pembawa()
    {
    	return $this->belongsTo('\App\User', 'id_pembawa', 'id');
    }
}
