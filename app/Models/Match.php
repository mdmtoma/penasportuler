<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{

    protected $table = 'matches';

    protected $fillable = [
        'home_player_id',
        'away_player_id',
        'phase_id',
        'home_score',
        'away_score'
    ];

    public function homePlayer()
    {
        return $this->belongsTo(Player::class, 'home_player_id');
    }

    public function awayPlayer()
    {
        return $this->belongsTo(Player::class, 'away_player_id');
    }

    public function getWinner()
    {
        if($this->home_score === $this->away_score) {
            return null;
        }
        return $this->home_score > $this->away_score ? $this->homePlayer : $this->awayPlayer;
    }

}
