<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // match 1
      $ida = DB::table('matches')->insert([
          'match_no' => 1,
          'score' => '6-4',
          'played_on' => '2020-04-30',
      ]);
      DB::table('match_details')->insert([
          'match_id' => 1,
          'team_id' => 1,
          'win_lose' => 'W',
          'goal_score' => 6,
          'goal_against' => 4
      ]);
      DB::table('match_details')->insert([
          'match_id' => 1,
          'team_id' => 2,
          'win_lose' => 'L',
          'goal_score' => 4,
          'goal_against' => 6
      ]);
      // match 2
      $idb = DB::table('matches')->insert([
          'match_no' => 2,
          'score' => '3-2',
          'played_on' => '2020-04-30',
      ]);
      DB::table('match_details')->insert([
          'match_id' => 2,
          'team_id' => 3,
          'win_lose' => 'W',
          'goal_score' => 3,
          'goal_against' => 2
      ]);
      DB::table('match_details')->insert([
          'match_id' => 2,
          'team_id' => 4,
          'win_lose' => 'L',
          'goal_score' => 2,
          'goal_against' => 3
      ]);
      // match 3
      $idc = DB::table('matches')->insert([
          'match_no' => 3,
          'score' => '3-2',
          'played_on' => '2020-05-7',
      ]);
      DB::table('match_details')->insert([
          'match_id' => 3,
          'team_id' => 1,
          'win_lose' => 'W',
          'goal_score' => 3,
          'goal_against' => 2
      ]);
      DB::table('match_details')->insert([
          'match_id' => 3,
          'team_id' => 4,
          'win_lose' => 'L',
          'goal_score' => 2,
          'goal_against' => 3
      ]);
      // match 4
      $idd = DB::table('matches')->insert([
          'match_no' => 4,
          'score' => '3-2',
          'played_on' => '2020-05-07',
      ]);
      DB::table('match_details')->insert([
          'match_id' => 4,
          'team_id' => 2,
          'win_lose' => 'W',
          'goal_score' => 3,
          'goal_against' => 2
      ]);
      DB::table('match_details')->insert([
          'match_id' => 4,
          'team_id' => 3,
          'win_lose' => 'L',
          'goal_score' => 2,
          'goal_against' => 3
      ]);
      // match 5
      $ide = DB::table('matches')->insert([
          'match_no' => 5,
          'score' => '3-3',
          'played_on' => '2020-05-14',
      ]);
      DB::table('match_details')->insert([
          'match_id' => 5,
          'team_id' => 1,
          'win_lose' => 'D',
          'goal_score' => 3,
          'goal_against' => 3
      ]);
      DB::table('match_details')->insert([
          'match_id' => 5,
          'team_id' => 2,
          'win_lose' => 'D',
          'goal_score' => 3,
          'goal_against' => 3
      ]);
      // match 6
      $idf = DB::table('matches')->insert([
          'match_no' => 6,
          'score' => '2-3',
          'played_on' => '2020-05-14',
      ]);
      DB::table('match_details')->insert([
          'match_id' => 6,
          'team_id' => 3,
          'win_lose' => 'L',
          'goal_score' => 2,
          'goal_against' => 3
      ]);
      DB::table('match_details')->insert([
          'match_id' => 6,
          'team_id' => 4,
          'win_lose' => 'W',
          'goal_score' => 3,
          'goal_against' => 2
      ]);
      // match 7
      $idg = DB::table('matches')->insert([
          'match_no' => 7,
          'score' => '3-2',
          'played_on' => '2020-05-21',
      ]);
      DB::table('match_details')->insert([
          'match_id' => 7,
          'team_id' => 1,
          'win_lose' => 'W',
          'goal_score' => 3,
          'goal_against' => 2
      ]);
      DB::table('match_details')->insert([
          'match_id' => 7,
          'team_id' => 4,
          'win_lose' => 'L',
          'goal_score' => 2,
          'goal_against' => 3
      ]);
      // match 8
      $idh = DB::table('matches')->insert([
          'match_no' => 8,
          'score' => '1-1',
          'played_on' => '2020-05-21',
      ]);
      DB::table('match_details')->insert([
          'match_id' => 8,
          'team_id' => 2,
          'win_lose' => 'D',
          'goal_score' => 1,
          'goal_against' => 1
      ]);
      DB::table('match_details')->insert([
          'match_id' => 8,
          'team_id' => 3,
          'win_lose' => 'D',
          'goal_score' => 1,
          'goal_against' => 1
      ]);
      // match 9
      $idh = DB::table('matches')->insert([
          'match_no' => 9,
          'score' => '1-6',
          'played_on' => '2020-05-26',
      ]);
      DB::table('match_details')->insert([
          'match_id' => 9,
          'team_id' => 1,
          'win_lose' => 'L',
          'goal_score' => 1,
          'goal_against' => 6
      ]);
      DB::table('match_details')->insert([
          'match_id' => 10,
          'team_id' => 4,
          'win_lose' => 'W',
          'goal_score' => 6,
          'goal_against' => 1
      ]);
      // match 10
      $idh = DB::table('matches')->insert([
          'match_no' => 10,
          'score' => '3-5',
          'played_on' => '2020-05-27',
      ]);
      DB::table('match_details')->insert([
          'match_id' => 9,
          'team_id' => 2,
          'win_lose' => 'L',
          'goal_score' => 3,
          'goal_against' => 5
      ]);
      DB::table('match_details')->insert([
          'match_id' => 10,
          'team_id' => 3,
          'win_lose' => 'W',
          'goal_score' => 5,
          'goal_against' => 3
      ]);
    }
}
