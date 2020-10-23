<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('book.index', compact(['books']));
    }

    public function create()
    {
        return view('book.create');
    }


    public function store(Request $request)
    {

        $book = new Book([
            'title' => $request->get('title'),
            'author' => $request->get('author'),
            'description' => $request->get('description')
        ]);

        $book->save();

        return redirect('/books');
    }

}
