<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerTotal extends Model
{
    use HasFactory;

    protected $table = 'player_totals';

    // From the database 'comlumn table'
    protected $fillable = [
        'age',
        'games',
        'games_started',
        'minutes_played',
        'field_goals',
        'field_goals_attempted',
        'i3pt',
        'i3pt_attempted',
        'i2pt',
        'i2pt_attempted',
        'free_throws',
        'free_throws_attempted',
        'offensive_rebounds',
        'defensive_rebounds',
        'assists',
        'steals',
        'blocks',
        'turnovers',
        'personal_fouls',
    ];
}
