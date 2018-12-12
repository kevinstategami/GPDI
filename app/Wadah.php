<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wadah extends Model
{
    protected $fillable = [
      'imd_ketua',
      'imd_sekretaris',
      'imd_bendahara',
      'imd_acara',
      'imd_musik',
      'imd_konseling_doa',
  ];

  public function event()
    {
    	return $this->HasMany('\App\Event');
    }

}
