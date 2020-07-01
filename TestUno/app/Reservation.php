<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
  protected $table = 'reservations';

  public function apartments(){
    return $this -> belongsToMany(Apartment::class);
  }

}
