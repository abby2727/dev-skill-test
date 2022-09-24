@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        <h2 class="text-dark">Player Total</h2>
        <a href="{{ route('player.export') }}" class="btn btn-success mb-4 mx-2">CSV Export</a>
        <a href="{{ route('player.xml') }}" target="_blank" class="btn btn-dark float-end">XML</a>

        <table id="myDataTable" class="table table-bordered table-striped" style="width: 100%;">
            <thead>
                <tr>
                    <th>Age</th>
                    <th>Games</th>
                    <th>Games Started</th>
                    <th>Minutes Played</th>
                    <th>field_goals</th>
                    <th>field_goals_attempted</th>
                    <th>3pt</th>
                    <th>3pt_attempted</th>
                    <th>2pt</th>
                    <th>2pt_attempted</th>
                    <th>free_throws</th>
                    <th>free_throws_attempted</th>
                    <th>offensive_rebounds</th>
                    <th>defensive_rebounds</th>
                    <th>assists</th>
                    <th>steals</th>
                    <th>blocks</th>
                    <th>turnovers</th>
                    <th>personal_fouls</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($players as $player)
                    <tr>
                        <td>{{ $player->age }}</td>
                        <td>{{ $player->games }}</td>
                        <td>{{ $player->games_started }}</td>
                        <td>{{ $player->minutes_played }}</td>
                        <td>{{ $player->field_goals }}</td>
                        <td>{{ $player->field_goals_attempted }}</td>
                        <td>{{ $player->i3pt }}</td>
                        <td>{{ $player->i3pt_attempted }}</td>
                        <td>{{ $player->i2pt }}</td>
                        <td>{{ $player->i2pt_attempted }}</td>
                        <td>{{ $player->free_throws }}</td>
                        <td>{{ $player->free_throws_attempted }}</td>
                        <td>{{ $player->offensive_rebounds }}</td>
                        <td>{{ $player->defensive_rebounds }}</td>
                        <td>{{ $player->assists }}</td>
                        <td>{{ $player->steals }}</td>
                        <td>{{ $player->blocks }}</td>
                        <td>{{ $player->turnovers }}</td>
                        <td>{{ $player->personal_fouls }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
