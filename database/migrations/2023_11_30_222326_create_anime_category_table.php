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
        Schema::create('anime_category', function (Blueprint $table) {
            $table->id();
            $table->foreignId('anime_id')->constrained('animes')->onDelete('CASCADE');  //アニメテーブル参照
            $table->foreignId('category_id')->constrained('categories')->onDelete('CASCADE');  //アニメカテゴリーテーブル参照
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anime_category');
    }
};
