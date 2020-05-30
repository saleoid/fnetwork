<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('teams')->insert([
          'name' => 'Chelsea',
      ]);
      DB::table('teams')->insert([
          'name' => 'Arsenel',
      ]);
      DB::table('teams')->insert([
          'name' => 'Manchester City',
      ]);
      DB::table('teams')->insert([
          'name' => 'Liverpool',
      ]);
    }
}
