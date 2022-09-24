<?php

namespace App\Exports;

use App\Models\Roster;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RosterExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Roster::select(
            "team_code",
            "number",
            "name",
            "pos",
            "height",
            "weight",
            "dob",
            "nationality",
            "years_exp",
            "college",
        )->get();
    }

    public function headings(): array
    {
        return [
            "Team Code",
            "Number",
            "Name",
            "Pos",
            "Height",
            "Weight",
            "Dob",
            "Nationality",
            "Years Experience",
            "College",
        ];
    }
}
