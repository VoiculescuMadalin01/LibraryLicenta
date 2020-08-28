@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row ">
@foreach($books as $book)    
<div class="card mx-1" style="width: 18rem;">
  <img class="card-img-top" src="storage/{{$book->image}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">
        <a href="/{{$book->id}}">{{$book->title}}</a>
    </h5>
    <h6 class="card-title">{{$book->author}}</h6>
    <p class="card-text">{{$book->descripton}}</p>
    @auth
    <a href="{{$book->id}}/edit" class="btn btn-primary">Edit</a>
    <form action="{{route('book.delete',$book)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">delete</button>
    </form>  
    @endauth
  </div>
</div>
@endforeach
</div>
</div>
@endsection