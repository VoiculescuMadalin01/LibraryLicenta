<?php

namespace App\Http\Controllers;

use App\Book;
use Intervention\Image\Facades\Image;

class BookController extends Controller
{
    public function index()
    {   
        $books =  Book::latest()->get();

        return view('welcome',compact('books'));

    }

    public function show(Book $book)
    {
        return view('book.show',compact('book'));
    }

    public function getBooks()
    {
        $books =  Book::latest()->get();
        
        return $books;
    }

    public function create()
    {
        return view('book.create');
    }

    public function store()
    {   
        $book = Book::create($this->validateBook());

        
        $this->storeImage($book);
    
        
                            
        return redirect('/');

    }


    public function edit(Book $book)
    {
        return view('book.edit',compact('book'));
    }

    public function update(Book $book)
    {
        $book->update($this->validateBook());

        $this->storeImage($book);

        return redirect('/'.$book->id);
    }

    public function destroy(Book $book)
    {
        $book->delete();
       
       return redirect(route('book.index'));

    }

    public function validateBook(){    
        return  request()->validate([
            'title' => 'required',
            
            'author' => 'required',
            
            'description' => 'required',
            
            'image' => 'sometimes | image'
            ]);
        }

     public function storeImage($book)
     {
         if (request()->has('image')) {
             
            $book->update([
                 'image' => request()->image->store('uploads','public')
             ]);

             $image = Image::make(public_path('storage/').$book->image)->fit(390,600);

             $image->save();
         
            }
     }   
}
