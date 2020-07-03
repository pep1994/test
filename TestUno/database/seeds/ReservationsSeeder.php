<?php

use Illuminate\Database\Seeder;
use App\Apartment;
use App\Reservation;
use App\User;
class ReservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $apartments = Apartment::all();
      factory(Reservation::class, 35) -> create();
      foreach ($apartments as $apartment) {
        $reservation = Reservation::inRandomOrder() -> first();
        $apartment -> reservations() -> attach($reservation);
      }
    }
}
