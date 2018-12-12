<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function wadah()
    {
    	return $this->belongsTo('\App\Wadah', 'id_wadah', 'id');
    }
}
