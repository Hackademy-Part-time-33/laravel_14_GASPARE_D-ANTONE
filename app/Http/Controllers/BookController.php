<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookCreateRequest;
use App\Http\Requests\BookEditRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
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

        $categories = Category::all();
        $authors = Author::all();
        return view('book.create' , compact('authors', 'categories'));
    }

    public function store(BookCreateRequest $request){

       $book = Book::create([
            'title' => $request->title,
            'year' => $request->year,
            'image' => $request->image,
            'author_id' => $request->author_id,
        ]);
        $book->categories()->attach($request->categories);
        session()->flash('success', 'Libro creato correttamente');
        return redirect()->route('index');


    }

    public function show(Book $book){
        $categories = Category::all();
        return view('book.show', compact('book') , compact('categories'));

    }
    public function edit(Book $book){
        $categories = Category::all();
        return view('book.edit', ['book' => $book, 'categories' => $categories]);


    }
    public function update(Book $book, BookEditRequest $request)
    {
        $book->update([
            'title' => $request->title,
            'year' => $request->year,
            'image' => $request->image,
        ]);
        $book->categories()->detach();
        $book->categories()->attach($request->categories);
        session()->flash('success', 'Libro modificato correttamente');
        return redirect()->route('index');


    }

    public function destroy(book $book){
        $book->categories()->detach();

        $book->delete();
        session()->flash('success', 'Libro cancellato correttamente');
        return redirect()->route('index');

    }





}


