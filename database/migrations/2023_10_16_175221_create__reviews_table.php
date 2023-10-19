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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->integer('star');            //星の数
            $table->String('comment');          //コメント
            $table->foreignId('user_id')->constrained('users')->onDelete('CASCADE');//ユーザーテーブル参照
            $table->foreignId('anime_id')->constrained('animes')->onDelete('CASCADE');//アニメテーブル参照
            $table->timestamps();               //作成日時 & 更新日時
            $table->softDeletes();              //削除フラグ
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_reviews');
    }
};
