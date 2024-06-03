<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookCreateRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function homepage() {
        return view('homepage');
    }

    public function library (){
        $books = Book::all();
        return view('book.library', compact('books'));
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
        session()->flash('succes', 'Libro creato correttamente');
        return redirect()->route('library');


    }





}


