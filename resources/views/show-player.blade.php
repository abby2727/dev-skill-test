@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Specific Player Statistics</h4>
                    </div>
                    <div class="card-body text-center">
                        <p><span class="text-muted">Player Name:</span> {{ $players->roster->name }}</p>
                        <p><span class="text-muted">Age: </span>{{ $players->age }}</p>
                        <p><span class="text-muted">Games: </span>{{ $players->games }}</p>
                        <p><span class="text-muted">Games Started: </span>{{ $players->games_started }}</p>
                        <p><span class="text-muted">Minutes Played: </span>{{ $players->minutes_played }}</p>
                        <p><span class="text-muted">Field Goals: </span>{{ $players->field_goals }}</p>
                        <p><span class="text-muted">Field Goals Attempted: </span>{{ $players->field_goals_attempted }}</p>
                        <p><span class="text-muted">3 pt: </span>{{ $players->i3pt }}</p>
                        <p><span class="text-muted">3 pt attempted: </span>{{ $players->i3pt_attempted }}</p>
                        <p><span class="text-muted">2 pt: </span>{{ $players->i2pt }}</p>
                        <p><span class="text-muted">2 pt attempted: </span>{{ $players->i2pt_attempted }}</p>
                        <p><span class="text-muted">Free throws: </span>{{ $players->free_throws }}</p>
                        <p><span class="text-muted">Free throws attempted: </span>{{ $players->free_throws_attempted }}</p>
                        <p><span class="text-muted">Offensive rebounds: </span>{{ $players->offensive_rebounds }}</p>
                        <p><span class="text-muted">Defensive rebounds: </span>{{ $players->defensive_rebounds }}</p>
                        <p><span class="text-muted">Assists: </span>{{ $players->assists }}</p>
                        <p><span class="text-muted">Steals: </span>{{ $players->steals }}</p>
                        <p><span class="text-muted">Blocks: </span>{{ $players->blocks }}</p>
                        <p><span class="text-muted">Turnovers: </span>{{ $players->turnovers }}</p>
                        <p><span class="text-muted">Personal fouls: </span>{{ $players->personal_fouls }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
