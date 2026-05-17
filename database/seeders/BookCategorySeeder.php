<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();

        Book::all()->each(function (Book $book) use ($categories) {
            $count = min($categories->count(), random_int(1, 3));
            $categoryIds = $categories->random($count)->pluck('id')->all();

            $book->categories()->sync($categoryIds);
        });
    }
}
