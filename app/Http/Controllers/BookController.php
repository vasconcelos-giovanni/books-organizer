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
        $apiBook = new ApiBookResource($book);
        $bookData = $apiBook->toArray(request());
        return view(
            'book',
            ['book' => (object) $bookData]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $book->update($request->all());

        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $booksIds = $request->ids;
        Book::whereIn('id', $booksIds)->delete();

        return redirect()->route('books.index');
    }


    public function test()
    {
        // $book = Book::find(1);
        $book = Book::find(1);
        // dd($books[0]->name);
        dd(new ApiBookResource($book));
        // dd($book);
    }
}
