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
        Schema::create('reply_article_comment', function (Blueprint $table) {
            $table->unsignedBigInteger('parent_comment_id');
            $table->foreign('parent_comment_id')->references('id')->
            on('article_comments')->onDelete('cascade');
            $table->unsignedBigInteger('child_comment_id');
            $table->foreign('parent_comment_id')->references('id')->
            on('article_comments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reply_article_comment');
    }
};
