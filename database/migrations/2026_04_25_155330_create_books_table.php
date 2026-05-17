<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // マイグレーション実行
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('isbn');
            $table->string('title');
            $table->integer('price');
            $table->string('publisher');
            $table->date('published');
            $table->boolean('sample');
            $table->timestamps();
        });
    }

    // ロールバックでbooksテーブル作成
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
