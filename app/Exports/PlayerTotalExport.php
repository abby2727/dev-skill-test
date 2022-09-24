<?php

namespace App\Exports;

use App\Models\PlayerTotal;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PlayerTotalExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return PlayerTotal::all();
    }

    public function headings(): array
    {
        return [
            "Player ID",
            "Age",
            "Games",
            "Games Started",
            "Minutes Played",
            "Field Goals",
            "Field Goals Attempted",
            "3 PT",
            "3 PT Attempted",
            "2 PT",
            "2 PT Attempted",
            "Free throws",
            "Free throws attempted",
            "Offensive rebounds",
            "Defensive rebounds",
            "Assists",
            "Steals",
            "Blocks",
            "Turnovers",
            "Personal fouls",
        ];
    }
}
