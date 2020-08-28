@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit') }}</div>
                <div class="card-body">
                    <form method="POST" action="/{{$book->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Book title') }}</label>
                            <div class="col-md-6">
                                <input id="title" type="title" class="form-control @error('tilte') is-invalid @enderror" name="title" value="{{ $book->title }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                        <div class="form-group row py-4">
                            <label for="author" class="col-md-4 col-form-label text-md-right">{{ __('Book author') }}</label>
                            <div class="col-md-6">
                                <input id="author" type="title" class="form-control @error('author') is-invalid @enderror" name="author" value="{{ $book->author }}" required autocomplete="author" autofocus>
                                @error('author')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                        <div class="form-group row ">
                            <label for="description"  class="col-md-4 col-form-label text-md-right">{{ __('Book description') }}</label>
                            <div class="col-md-6">
                                <textarea  class="form-control @error('description') is-invalid @enderror" id="description" name="description"  required>{{$book->description}}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </div>
                        </div>

                        <div class="form-group row py-4">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Book cover') }}</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control-file " name="image"    style="z-index: 1; opacity: 1;">
                            </div>
                        </div>

                        <div class="form-group row py-4">
                            <div class="col text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection