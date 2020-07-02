<?php

use Illuminate\Database\Seeder;
use App\Optional;
use App\Apartment;

class OptionalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // factory(Optional::Class, 6) -> create() -> each(function($optionals){
      //   $apartments = Apartment::inRandomOrder() -> take(rand(1,100)) -> get();
      //   $optionals -> apartments() -> attach($apartments);
      // });
      $apartments = Apartment::all();
      factory(Optional::class, 6) -> create();
      foreach ($apartments as $apartment) {
        $optionals = Optional::inRandomOrder() -> take(rand(1,4)) -> get();
        $apartment -> optionals() -> attach($optionals);
      }
    }
}
