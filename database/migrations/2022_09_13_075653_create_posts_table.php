<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('category_posts')->onDelete('cascade');
            // title of the article-- must be as string
            $table->string('title');
            // autor of the article--must be as string
            $table->string('author');
            // category of the article--it is take from select option must be as string
            // $table->string('Category');
            // tags of article--must be as string
            $table->string('tags');
            // must be as a date because it is date of the published
            $table->date('published');
            // this one is as a file
            $table->string('upload');
            // and this one is description of the articles
            $table->longText("description");
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
        Schema::dropIfExists('posts');
    }
}
