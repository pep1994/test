<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $table = 'apartments';

    public function user(){
      return $this ->belongsTo(User::class);
    }

    public function messages(){
      return $this -> hasMany(Message::class);
    }

    public function sponsors(){
      return $this -> hasMany(Sponsor::class);
    }

    public function reservations(){
      return $this -> belongsToMany(Reservation::class);
    }
}
