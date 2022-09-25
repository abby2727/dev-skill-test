<?php

namespace App\Http\Controllers;

use App\Exports\PlayerTotalExport;
use App\Models\PlayerTotal;
use Maatwebsite\Excel\Facades\Excel;

class PlayerTotalController extends Controller
{
    public function index()
    {
        $players = PlayerTotal::all();
        return view('player', compact(('players')));
    }

    public function show($player_id)
    {
        $players = PlayerTotal::find($player_id);
        // dd($players);
        return view('show-player', compact(('players')));
    }

    public function export()
    {
        return Excel::download(new PlayerTotalExport, 'player-total.csv');
    }

    public function xml()
    {
        $players = PlayerTotal::all();

        return response()->xml(['players' => $players->toArray()]);
    }
}
