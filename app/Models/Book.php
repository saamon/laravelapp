<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // フィールド型の変換型を宣言
    // datetimeにキャストすることで、日付形式を変換できる
    protected function casts(): array
    {
        return [
            'published' => 'datetime',
        ];
    }
}
