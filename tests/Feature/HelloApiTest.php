<?php

use function Pest\Laravel\getJson;

test('hello api test', function () {
    $response = getJson('/api/hello');

    $response
        ->assertSuccessful()
        ->assertJson([
            'message' => 'Hello, World!',
        ]);
});
