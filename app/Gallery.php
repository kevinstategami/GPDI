<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public function wadah()
    {
    	return $this->belongsTo('\App\Wadah', 'id_wadah', 'id');
    }
}
