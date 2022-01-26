@extends('layouts.main')

@section('content')
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Series</th>
        </tr>

        @foreach ($comics as $comic )
            <tr>
                <td>{{ $comic->id }}</td>
                <td>{{ $comic->name }}</td>
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->series }}</td>
            </tr>
        @endforeach

    </table>
@endsection