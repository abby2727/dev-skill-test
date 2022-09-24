@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        <div class="card">
            <div class="card-header">
                <h4>Team
                    <a href="{{ route('team.export') }}" class="btn btn-success float-end">CSV Export</a>
                </h4>
            </div>
            <div class="card-body">
                <table id="myDataTable" class="table table-bordered table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teams as $team)
                            <tr>
                                <td>{{ $team->code }}</td>
                                <td>{{ $team->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
