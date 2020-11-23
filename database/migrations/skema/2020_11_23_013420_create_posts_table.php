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
            $table->bigIncrements('post_id');
            $table->unsignedBigInteger('post_user_id');
            $table->enum('post_type', ['image', 'video', 'gif']);
            $table->string('post_title', 255);
            $table->string('post_source', 255)->nullable();
            $table->string('post_image_name', 260)->nullable();
            $table->string('post_image_original_name', 260)->nullable();
            $table->string('post_video_link', 255)->nullable();
            $table->string('post_gif_link', 255)->nullable();
            $table->string('post_image_link', 255)->nullable();
            $table->string('post_tag', 255)->nullable();
            $table->string('post_link', 255);
            $table->unsignedBigInteger('post_like');
            $table->unsignedBigInteger('post_dislike');
            $table->boolean('post_nsfw');
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);

            $table->foreign('post_user_id')
                ->references('user_id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
