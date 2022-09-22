@extends('layouts.app')

@section('content')
    <div class="container my-4">

        <h1 class="text-dark">Team</h1>

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
@endsection
