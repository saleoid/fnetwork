<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    public function matchDetails()
    {
      return $this->hasMany('\App\MatchDetail');
    }
}
