<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('sumary');
            $table->string('img_url');
            $table->string('content');
            $table->string('count_view');
            $table->string('hightlight');
            $table->integer('order');
            $table->boolean('status');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('type_of_news_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('type_of_news_id')->references('id')->on('type_of_news');
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
        Schema::dropIfExists('news');
    }
}
