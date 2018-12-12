<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RingkasanKhotbah extends Model
{
    protected $fillable = [
      'cover',
  ];

  public function pembawa()
    {
    	return $this->belongsTo('\App\User', 'id_pembawa', 'id');
    }
}
