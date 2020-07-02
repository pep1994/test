<?php

use Illuminate\Database\Seeder;
use App\Apartment;
use App\User;
use App\Optional;

class ApartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Apartment::class, 100) -> make() -> each(function($apartment){
          $user = User::inRandomOrder()->first();
          $optionals = Optional::inRandomOrder() -> take(rand(1,3)) -> get();
          $apartment -> optionals() -> attach($optionals);
          $apartment -> user() -> associate($user);
          $apartment -> save();
        });
    }
}
