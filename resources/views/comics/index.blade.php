@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <button class="btn btn-warning">
            <a class="text-decoration-none text-light" href="{{route('comics.create')}}">Aggiungi un fumetto all'archivio</a>
        </button>
        <table class="table">
            <tr class="text-center">
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Series</th>
                <th colspan="4">Actions</th>
            </tr>
    
            @foreach ($comics as $comic )
                <tr>
                    <td>{{ $comic->id }}</td>
                    <td>{{ $comic->name }}</td>
                    <td> € {{ $comic->price }}</td>
                    <td>{{ $comic->series }}</td>
                    <td class="d-flex">
                        <button class="btn btn-success">
                            <a class="text-decoration-none text-light" href="{{ route('comics.show', $comic->id) }}">Vedi Dettagli</a>
                        </button>
                        <button class="btn  btn-primary mx-2 ">
                            <a class="text-decoration-none text-light" href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
                        </button>

                        <form action="{{ route('comics.destroy', $comic->id) }}"method="POST">
                            @csrf
                            @method('DELETE')

                            <input type="submit" class="btn btn-danger"
                            value="Elimina">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection