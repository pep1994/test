<?php

use Illuminate\Database\Seeder;
use App\Apartment;
use App\Reservation;
class ReservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Reservation::Class, 30) -> create() -> each(function($reservation){
        $apartment = Apartment::inRandomOrder() -> first();
        $reservation -> apartments() -> attach($apartment);
      });
    }
}
