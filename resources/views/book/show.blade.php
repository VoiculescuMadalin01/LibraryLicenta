@extends('layouts.app')

@section('content')

<div class="container">
    <h2>{{$book->title}}</h2>
     <h4>{{$book->author}}</h4>
     <img src="storage/{{$book->image}}" alt="Book Image">
     <p class="my-4">{{$book->description}}</p>
        @auth
        <a href="{{$book->id}}/edit" class="btn btn-primary">Edit</a>
        <form action="{{route('book.delete',$book)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>  
        @endauth
</div>



@endsection