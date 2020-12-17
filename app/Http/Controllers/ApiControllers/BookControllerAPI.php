<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookControllerAPI extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth:api')->except(['index', 'show']);
    // }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return BookResource::collection(Book::with('ratings')->paginate(25));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
        ]);

        $book = new Book;
        $book->user_id = $request->user()->id;
        $book->title = $request->title;
        $book->description = $request->description;
        $book->author = $request->author;
        $book->save();

        return new BookResource($book);
    }


    public function show(Book $book)
    {
        return new BookResource($book);
    }


    public function update(Request $request, Book $book)
    {

        if ($request->user()->id !== $book->user_id) {

            return response()->json(['error' => 'You can only edit your own books.'], 403);
        }

        $book->update($request->only(['title', 'author', 'description']));


        return new BookResource($book);
    }


    public function destroy(Request $request, Book $book)
    {
        // if($request->user()->id != $book->user_id){
        //     return response()->json(['error' => 'You can only delete your own books.'], 403);
        // }

        $book->delete();
        return response()->json(null,204);
    }
}
