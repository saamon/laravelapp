<?php

use App\Models\Book;

describe('本の一覧表示', function () {
    test('通常の本を表示できる', function () {
        Book::factory()->create([
            'title' => '通常の本',
            'sample' => false,
        ]);

        $response = $this->get(route('books.index'));

        $response->assertSuccessful();
        $response->assertSee('通常の本');
        $response->assertSee('×');
    });

    test('サンプル本を表示できる', function () {
        Book::factory()->sample()->create([
            'title' => 'サンプル本',
        ]);

        $response = $this->get(route('books.index'));

        $response->assertSuccessful();
        $response->assertSee('サンプル本');
        $response->assertSee('○');
    });
});
