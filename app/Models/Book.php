<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;

    // 本からレビュー情報を取得する
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    // Carbonを使いたいからcastで文字列を変換する
    // date:日付のみ,datetime:日付+時刻
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

    // カテゴリーを取得できるようにする
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}
