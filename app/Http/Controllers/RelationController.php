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
}
