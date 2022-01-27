@extends('layouts.main')

@section('content')
    <div class="container my-5">
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
                    <td> € {{ $comic->price }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>
                        <button>
                            <a href="{{ route('comics.show', $comic->id) }}">Vedi Dettagli</a>
                        </button>
                    </td>
                </tr>
            @endforeach
        </table>
        <button>
            <a href="{{route('comics.create')}}">Aggiungi un fumetto all'archivio</a>
        </button>
    </div>
@endsection