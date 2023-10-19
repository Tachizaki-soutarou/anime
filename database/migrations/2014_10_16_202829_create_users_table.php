<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('users', function (Blueprint $table) {
            $table->id();                               //ユーザーID
            $table->string('email')->unique();          //メール&ログインID　ユニーク制約
            $table->string('last_name');                //苗字
            $table->string('first_name');               //名前
            $table->string('nick_name',10)->unique();      //ニックネーム　ユニーク制約
            $table->string('sex');                      //性別
            $table->integer('age');                     //年齢
            $table->string('password');                 //パスワード
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
};
