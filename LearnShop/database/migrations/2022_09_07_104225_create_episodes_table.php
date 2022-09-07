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
        Schema::create('episodes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('id')->on('course')->onDelete('cascade');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('video_path');
            $table->unsignedBigInteger('duration')->default(0);
            $table->increments('number')->unique();
            $table->boolean('is_free')->default(false);
            $table->unsignedBigInteger('view_count')->default(0);
            $table->unsignedBigInteger('like_count')->default(0);
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
        Schema::dropIfExists('episodes');
    }
};
