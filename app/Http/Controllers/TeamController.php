<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TeamExport;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();

        return view('team.team', compact(('teams')));
    }

    public function export()
    {
        return Excel::download(new TeamExport, 'team.csv');
    }

    public function xml()
    {
        $team = Team::all();

        return response()->xml(['team' => $team->toArray()]);
    }

    public function json()
    {
        $teams = Team::all()->toJson();

        return $teams;
    }
}
