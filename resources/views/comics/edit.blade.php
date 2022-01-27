@extends('layouts.main')

@section('content')
<section class="container my-5">
    <h1 class="text-center">Modifica {{$comic->name}}</h1>

    <div class="row">
        <div class="col">
             <form action="{{ route('comics.update' , $comic->id) }}" method="POST">
                 {{-- cross_site request forgery --}}
                 @csrf
                 @method('PATCH')

                 <div class="mb-4">
                     <label for="name" class="form-label">Name</label>
                     <input type="text" class="form-control" id="name" name="name"
                     value="{{$comic->name}}">
                 </div>

                 <div class="mb-4">
                     <label for="description" class="form-label">Description</label>
                     <textarea type="text" class="form-control" id="description" name="description">{{$comic->description}}</textarea>
                 </div>

                 <div class="mb-4">
                     <label for="thumb" class="form-label">Thumb</label>
                     <input type="text" class="form-control" id="thumb" name="thumb"
                     value="{{$comic->thumb}}">
                     
                 </div>

                 <div class="mb-4">
                     <label for="price" class="form-label">Price</label>
                     <input type="text" class="form-control" id="price" name="price"
                     value="{{$comic->price}}">
                 </div>

                 <div class="mb-4">
                     <label for="series" class="form-label">Series</label>
                     <input type="text" class="form-control" id="series" name="series"
                     value="{{$comic->series}}">
                 </div>

                 <button type="submit" class="btn btn-danger">Modifica Fumetto</button>
             </form>
        </div>
    </div>
</section>
@endsection