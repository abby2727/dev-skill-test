@extends('layouts.app')

@section('content')
    <div class="container my-4">

        <h1 class="text-dark">Roster</h1>

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
                        <td>{{ $roster->name }}</td>
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
@endsection
