<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
  protected $table = 'sponsors';

  public function apartment(){
    return $this -> belongsTo(Apartment::class);
  }
}
