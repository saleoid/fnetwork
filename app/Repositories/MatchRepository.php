<?php

namespace App\Repository;

use App\Team;
use App\Match;

class MatchRepository
{
   public function getTeamsData($fromDate, $toDate)
   {
     $data = Team::all();
     $statsMatchesData = Match::with('matchDetails.team')->whereBetween('played_on', ["2020-04-26", $toDate])->get();
     $matchesData = Match::with('matchDetails.team')->whereBetween('played_on', [$fromDate, $toDate])->get();
     $teams = $data->toArray();

     foreach($teams as $key => $d) {
       $teams[$key]['matches_played'] = 0;
       $teams[$key]['won'] = 0;
       $teams[$key]['lost'] = 0;
       $teams[$key]['draw'] = 0;
       $teams[$key]['goal_difference'] = 0;
       $teams[$key]['points'] = 0;
     }

     $matches = $statsMatchesData->toArray();

     foreach($matches as $key => $match) {
       foreach($match['match_details'] as $mDetail) {
         foreach($teams as $k => $d) {
           if($mDetail['team_id'] === $d['id']) {
             $teams[$k]['matches_played'] += 1;
             $teams[$k]['goal_difference'] += $mDetail['goal_score'] - $mDetail['goal_against'];
             if($mDetail['win_lose'] === 'W') {
               $teams[$k]['points'] += 3;
               $teams[$k]['won'] += 1;
             } else if($mDetail['win_lose'] === 'L') {
               $teams[$k]['lost'] += 1;
             } else {
               $teams[$k]['points'] += 1;
               $teams[$k]['draw'] += 1;
             }
           }
         }
       }
     }

     $matches = $matchesData->toArray();
     return ["teams" => $teams, "matches" => $matches];
   }
}
