<?php

namespace Tests\Support;

use App\Support\Calculator;

test('sum', function () {
    $calculator = new Calculator();
    expect($calculator->add(1, 2))->toBe(3);
});
