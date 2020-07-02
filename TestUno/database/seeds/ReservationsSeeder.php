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
      factory(Reservation::Class, 30) -> make() -> each(function($reservation){
        $apartment = Apartment::inRandomOrder() -> first();
        $user = User::inRandomOrder() -> first();
        $reservation -> apartments() -> attach($apartment);
        $reservation -> user() -> associate($user);

        $reservation -> save();
      });
    }
}
