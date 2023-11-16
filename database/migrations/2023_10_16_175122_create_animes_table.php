<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animes', function (Blueprint $table) {
            $table->id();
             //アニメ名　ユニーク制約
            $table->string('title')->unique();
             //アニメ名（ひらがな）
            $table->string('Hiragana_title')->unique();
            //アニメ名（ローマ字）
            $table->string('Latin_alphabet_title')->unique();
             //アニメトップ画像　ユニーク制約
            $table->longText('image')->nullable();
            //アニメ放送開始日
            $table->timestamp('first_broadcast_start_date')->nullable();
            $table->timestamp('second_broadcast_start_date')->nullable();
            $table->timestamp('third_broadcast_start_date')->nullable();
            $table->timestamp('fourth_broadcast_start_date')->nullable();
            //あらすじ
            $table->text('synopsis');
            //原作テーブル参照
            $table->foreignId('original_id')->constrained('originals')->onDelete('CASCADE');
            //カテゴリーテーブル参照
            $table->foreignId('category_id')->constrained('categories')->onDelete('CASCADE');
            //作成日時 & 更新日時
            $table->timestamps();
            //削除フラグ
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animes');
    }
};
