<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Models\Book;
use Illuminate\Http\RedirectResponse;

class ReviewController extends Controller
{
    public function create(Book $book)
    {
        return view('reviews.create', [
            'book' => $book,
        ]);
    }
    public function store(ReviewRequest $request, Book $book): RedirectResponse
    {
        $book->reviews()->create([
            ...$request->validated(),
            'status' => 'published',
        ]);

        return to_route('books.index', $book);
    }
}
