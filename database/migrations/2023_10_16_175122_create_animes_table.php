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
            $table->string('title')->unique();          //アニメ名　ユニーク制約
            $table->longText('image');                  //アニメトップ画像　ユニーク制約
            $table->date('broadcast_starts');           //アニメ放送開始日
            $table->text('synopsis');                   //あらすじ
            $table->foreignId('original_id')->constrained('originals')->onDelete('CASCADE');//原作テーブル参照
            $table->foreignId('categoy_id')->constrained('categories')->onDelete('CASCADE');//カテゴリーテーブル参照
            $table->timestamps();                       //作成日時 & 更新日時
            $table->softDeletes();                      //削除フラグ
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
