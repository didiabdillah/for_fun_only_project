<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('comment_id');
            $table->unsignedBigInteger('comment_user_id');
            $table->unsignedBigInteger('comment_post_id');
            $table->string('comment_text', 1023);
            $table->unsignedBigInteger('comment_like');
            $table->unsignedBigInteger('comment_dislike');
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);

            $table->foreign('comment_user_id')
                ->references('user_id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('comment_post_id')
                ->references('post_id')->on('posts')
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
        Schema::dropIfExists('comments');
    }
}
