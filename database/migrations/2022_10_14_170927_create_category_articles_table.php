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
        Schema::create('article_category', function (Blueprint $table) {
            
            $table->increments('id');

            // Categories
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');

            // Articles
            $table->integer('article_id')->unsigned();
            $table->foreign('article_id')->references('id')->on('articles');

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
        Schema::dropIfExists('article_category');
    }
};
