<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{



    public function create()
    {

        $books = Book::all();

        return view('rating.create', compact('books'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rating = new Rating([
            'user_id' => $request->get('user_id'),
            'book_id' => $request->get('book_id'),
            'rating' => $request->get('rating'),
            'review' => $request->get('review')
        ]);

        $rating->save();

        return redirect('books');
    }
}
