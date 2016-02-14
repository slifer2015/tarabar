<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->timestamps();
        });
        Schema::create('news_tags', function (Blueprint $table){
            $table->integer('news_id')->unsigned();
            $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');
            $table->integer('tags_id')->unsigned();
            $table->foreign('tags_id')->references('id')->on('tags');
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
        Schema::drop('news_tags');
        Schema::drop('tags');
    }
}
