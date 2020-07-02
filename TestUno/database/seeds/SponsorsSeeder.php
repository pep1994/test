<?php

use Illuminate\Database\Seeder;
use App\Sponsor;
use App\Apartment;

class SponsorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Sponsor::class, 6) -> make() -> each(function($sponsor){
        $apartment = Apartment::inRandomOrder()->first();
        $sponsor -> apartment() -> associate($apartment);
        $sponsor -> save();
      });
    }
}
