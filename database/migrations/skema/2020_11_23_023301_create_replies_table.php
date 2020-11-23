<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replies', function (Blueprint $table) {
            $table->bigIncrements('reply_id');
            $table->unsignedBigInteger('reply_user_id');
            $table->unsignedBigInteger('reply_post_id');
            $table->unsignedBigInteger('reply_comment_id');
            $table->string('reply_text', 1023);
            $table->unsignedBigInteger('reply_like');
            $table->unsignedBigInteger('reply_dislike');
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);

            $table->foreign('reply_user_id')
                ->references('user_id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('reply_post_id')
                ->references('post_id')->on('posts')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('reply_comment_id')
                ->references('comment_id')->on('comments')
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
        Schema::dropIfExists('replies');
    }
}
