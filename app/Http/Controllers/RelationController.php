<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Review;

class RelationController extends Controller
{
    public function belong()
    {
        // モデルのインスタンス
        $review = Review::with('book')->first();

        return view('relation.belong', [
            'review' => $review,
        ]);
    }

    public function hasMany()
    {
        return view('relation.hasmany', [
            'book' => Book::with('reviews')->first(),
        ]);
    }

    public function with()
    {
        $books = Book::with('reviews')->get();

        return view('relation.with', [
            'books' => $books,
        ]);
    }

    public function withCount()
    {
        $books = Book::withCount('reviews')->get();

        return view('relation.withcount', [
            'books' => $books,
        ]);
    }

    public function create()
    {
        $book = Book::find(2);
        $book->reviews()->create([
            'rate' => 9,
            'body' => 'relation取得できてる？',
            'status' => 'publish',
            'book_id' => 2,
        ]);

        return 'レビューを保存しました';
    }
}
