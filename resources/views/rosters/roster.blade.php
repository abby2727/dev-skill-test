@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h4>Roster
                    <a href="{{ route('roster.json') }}" target="_blank" class="btn btn-dark float-end">JSON format</a>
                    <a href="{{ route('roster.xml') }}" target="_blank" class="btn btn-warning float-end mx-2">XML</a>
                    <a href="{{ route('roster.export') }}" class="btn btn-success float-end">CSV Export</a>
                </h4>
            </div>
            <div class="card-body">
                <table id="myDataTable" class="table table-bordered table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Team Code</th>
                            <th>Number</th>
                            <th>Name</th>
                            <th>Pos</th>
                            <th>Height</th>
                            <th>Weight</th>
                            <th>Dob</th>
                            <th>Nationality</th>
                            <th>Years Experience</th>
                            <th>College</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rosters as $roster)
                            <tr>
                                <td>{{ $roster->team_code }}</td>
                                <td>{{ $roster->number }}</td>
                                <td>
                                    <a style="text-decoration: none;"
                                        href="{{ route('roster.show', $roster->id) }}">{{ $roster->name }}</a>
                                </td>
                                <td>{{ $roster->pos }}</td>
                                <td>{{ $roster->height }}</td>
                                <td>{{ $roster->weight }}</td>
                                <td>{{ $roster->dob }}</td>
                                <td>{{ $roster->nationality }}</td>
                                <td>{{ $roster->years_exp }}</td>
                                <td>{{ $roster->college }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
