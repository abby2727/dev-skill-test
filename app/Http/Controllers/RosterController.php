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
        return view('roster', compact(('rosters')));
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
}
