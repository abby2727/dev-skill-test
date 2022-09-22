<?php

namespace App\Http\Controllers;

use App\Models\PlayerTotal;
use Illuminate\Http\Request;

class PlayerTotalController extends Controller
{
    public function index()
    {
        $players = PlayerTotal::all();
        return view('player', compact(('players')));
    }
}
