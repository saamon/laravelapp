<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('books.index', [
            'books' => Book::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create', [
            'book' => new Book(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Book::create($request->only(['isbn', 'title', 'price', 'publisher', 'published']));

        return to_route('books.index');
    }

    /**
     * 一覧画面表示.
     */
    public function show(Book $book)
    {
        return view('books.show', [
            'book' => $book,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book): RedirectResponse
    {
        // update
        // リクエストから項目を取り出す→入力値をモデルに反映
        $book->fill($request->only(['isbn', 'title', 'price', 'publisher', 'published', 'sample']))
            ->save();

        return to_route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book): RedirectResponse
    {
        $book->delete();

        return to_route('books.index');
    }
}
