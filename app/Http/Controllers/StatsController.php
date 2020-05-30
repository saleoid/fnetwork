<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Match;
use Carbon\Carbon;

class StatsController extends Controller
{

    private $matchRepository;

    public function __construct(\App\Repository\MatchRepository $matchRepository)
    {
       $this->matchRepository = $matchRepository;
    }

    public function index()
    {
      $data = $this->matchRepository->getTeamsData("2020-04-26", "2020-05-2");
      return view('stats', $data);
    }

    public function stat($id)
    {
      $fromDate = Carbon::createFromTimestamp($id)->subDays(7)->format('Y-m-d');
      $toDate = Carbon::createFromTimestamp($id)->format('Y-m-d');
      return json_encode($this->matchRepository->getTeamsData($fromDate, $toDate));
    }
}
