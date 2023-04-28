<?php

namespace App\Http\Controllers;

use App\Http\Resources\ApiBookResource;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        $booksCollection = ApiBookResource::collection($books);

        return view(
            'books',
            // ['books' => $books]
            ['books' => $booksCollection]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Book::create($request->all());

        return redirect()->route('books.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $bookModel = Book::find($book);
        $bookJson = new ApiBookResource($bookModel);

        return view(
            'book',
            [$bookJson]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }

    public function getBook($book)
    {
    }

    public function test()
    {
        $book = Book::find(1);
        dd(new ApiBookResource($book));
        // dd($book);
    }
}
