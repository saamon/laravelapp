<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    // 本からレビュー情報を取得する
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    // フィールド型の変換型を宣言
    // datetimeにキャストすることで、日付形式を変換できる
    protected function casts(): array
    {
        return [
            'published' => 'datetime',
        ];
    }

    protected $attributes = [
        'price' => 300,
        'publisher' => 'テスト本屋',
        'sample' => false,
    ];

    // protected:そのクラス自身 + 子クラスから触れる
    // fillable：一括代入で変更してよいカラム一覧
    protected $fillable = [
        'isbn',
        'title',
        'price',
        'publisher',
        'published',
        'sample',
    ];
}
