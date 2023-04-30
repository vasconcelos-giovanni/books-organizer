<?php

namespace App\Http\Controllers;

use App\Http\Resources\ApiBookResource;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = auth()->id();
        $books = Book::where('user_id', $user_id)->get();
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
        // $book = Book::create($request->all());
        DB::transaction(function () use ($request) {
            $user = auth()->user();

            $bookData = [
                'user_id' => $user->id,
                'sku' => $request->sku,
                'name' => $request->name,
                'price' => $request->price,
                'weight' => $request->weight,
            ];

            if ($request->hasFile('cover')) {
                $bookData['cover'] = $this->uploadCover($request->file('cover'));
            }

            Book::create($bookData);
        });

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
        DB::transaction(function () use ($request, $book) {
            $user = auth()->user();

            $bookUpdatedData = [
                'user_id' => $user->id,
                'sku' => $request->sku,
                'name' => $request->name,
                'price' => $request->price,
                'weight' => $request->weight,
            ];

            if ($request->hasFile('cover')) {
                $bookUpdatedData['cover'] = $this->uploadCover($request->file('cover'));
            }

            $book->update($bookUpdatedData);
        });

        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resources from storage.
     */
    public function destroy(Request $request)
    {
        $booksIds = $request->ids;
        Book::whereIn('id', $booksIds)->delete();

        return redirect()->route('books.index');
    }

    public function uploadCover($cover)
    {
        $coverName = time() . '.' . $cover->getClientOriginalExtension();

        try {
            $cover->storeAs('public/uploads', $coverName);

            return $coverName;
        } catch (\Throwable $error) {
            dd($error);
        }
    }

    // public function test()
    // {
    //     // $book = Book::find(1);
    //     $book = Book::find(1);
    //     // dd($books[0]->name);
    //     dd(new ApiBookResource($book));
    //     // dd($book);

}
