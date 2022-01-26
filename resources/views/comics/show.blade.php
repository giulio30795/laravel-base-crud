@extends('layouts.main')

@section('content')
    <h1 class="text-center mb-5">
        Comic Details
    </h1>
    <div class="container">
        <h4 class="mb-5">{{$comic->name}}</h4>
        <p>{{$comic->description}}</p>
    </div>
@endsection