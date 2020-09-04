<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfluencersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('influencers', function (Blueprint $table) {//influencersテーブル作成
            $table->bigIncrements('id');
            $table->string('name'); // 名前を保存するカラム
            $table->string('gender');  // 性別を保存するカラム
            $table->string('address_mail');  // メールアドレスを保存するカラム
            $table->string('tel_num');// 電話番号を保存するカラム
            $table->string('address');// 住所を保存するカラム
            $table->string('age');// 年齢を保存するカラム
            $table->string('sns_kind');// 使用するsnsを保存するカラム
            $table->string('sns_url');// snsのurlを保存するカラム
            $table->string('sns_genre');//snsのジャンルを保存するカラム
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
        Schema::dropIfExists('influencers');
    }
}
