<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
        [
            'isbn' => '978-4-7981-6890-2',
            'title' => 'PHP入門',
            'price' => 2000,
            'publisher' => '技術評論社',
            'published' => '2026-01-01',
            'sample' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'isbn' => '978-4-7981-6890-3',
            'title' => 'Laravel入門',
            'price' => 3000,
            'publisher' => '技術評論社',
            'published' => '2026-02-01',
            'sample' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'isbn' => '978-4-7981-6890-4',
            'title' => 'Vue.js入門',
            'price' => 4000,
            'publisher' => '技術評論社',
            'published' => '2026-03-01',
            'sample' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        ]);
    }
}
