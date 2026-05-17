<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * マイグレーションの実行
     */
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            // 外部キー制約
            $table->foreignId('book_id')->constrained()->cascadeOnDelete();
            $table->string('status')->default('draft');
            $table->unsignedTinyInteger('rate');
            $table->text('body')->nullable();
            $table->timestamps();
        });
    }

    /**
     * ロールバックでreviewsテーブルを削除
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
