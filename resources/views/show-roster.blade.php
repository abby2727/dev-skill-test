@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Player Information</h4>
                    </div>
                    <div class="card-body text-center">
                        <p>Team: <strong>{{ $rosters->team_code }}</strong></p>
                        <p>Number: <strong>{{ $rosters->number }}</strong></p>
                        <p>Name: <strong>{{ $rosters->name }}</strong></p>
                        <p>Pos: <strong>{{ $rosters->pos }}</strong></p>
                        <p>Height: <strong>{{ $rosters->height }}</strong></p>
                        <p>Weight: <strong>{{ $rosters->weight }}</strong></p>
                        <p>Date: <strong>{{ $rosters->dob }}</strong></p>
                        <p>Nationality: <strong>{{ $rosters->nationality }}</strong></p>
                        <p>Years Experience: <strong>{{ $rosters->years_exp }}</strong></p>
                        <p>College: <strong>{{ $rosters->college }}</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
