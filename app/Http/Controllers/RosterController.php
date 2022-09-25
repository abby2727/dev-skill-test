<?php

namespace App\Http\Controllers;

use App\Exports\RosterExport;
use App\Models\Roster;
use Maatwebsite\Excel\Facades\Excel;

class RosterController extends Controller
{
    public function index()
    {
        $rosters = Roster::all();
        // dd($rosters);

        return view('rosters.roster', compact(('rosters')));
    }

    public function show($id)
    {
        $rosters = Roster::find($id);
        // dd($rosters);

        return view('rosters.show-roster', compact(('rosters')));
    }

    public function export()
    {
        return Excel::download(new RosterExport, 'rosters.csv');
    }

    public function xml()
    {
        $roster = Roster::all();

        return response()->xml(['roster' => $roster->toArray()]);
    }

    public function json()
    {
        $roster = Roster::all()->toJson();

        return $roster;
    }
}
