<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookCreateRequest;
use App\Http\Requests\BookEditRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function homepage() {
        return view('homepage');
    }

    public function index (){
        $books = Book::paginate(3);
        return view('book.index', compact('books'));
    }

    public function create (){

        return view('book.create');
    }

    public function store(BookCreateRequest $request){

        Book::create([
            'title' => $request->title,
            'year' => $request->year,
            'image' => $request->image,
        ]);
        session()->flash('success', 'Libro creato correttamente');
        return redirect()->route('index');


    }

    public function show(Book $book){
        return view('book.show', compact('book'));

    }
    public function edit(Book $book){
        return view('book.edit', compact('book'));


    }
    public function update(Book $book, BookEditRequest $request)
    {
        $book->update([
            'title' => $request->title,
            'year' => $request->year,
            'image' => $request->image,
        ]);
        session()->flash('success', 'Libro modificato correttamente');
        return redirect()->route('index');


    }

    public function destroy(book $book){

        $book->delete();
        session()->flash('success', 'Libro cancellato correttamente');
        return redirect()->route('index');

    }





}


