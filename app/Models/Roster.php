<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roster extends Model
{
    use HasFactory;

    protected $table = 'roster';

    // From the database 'comlumn table'
    protected $fillable = [
        'team_code',
        'number',
        'name',
        'pos',
        'height',
        'weight',
        'dob',
        'nationality',
        'years_exp',
        'college',
    ];
}
