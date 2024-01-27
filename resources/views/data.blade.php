@extends('layouts.app')

@section('content')
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>User ID</th>
                <th>Desk Number</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
                <tr>
                    <td>{{ $row->date }}</td>
                    <td>{{ $row->user_id }}</td>
                    <td>{{ $row->desk_number }}</td>
                    <td>{{ $row->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
