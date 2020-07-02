<?php

use Illuminate\Database\Seeder;
use App\Optional;

class OptionalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Optional::Class, 6) -> create();
    }
}
