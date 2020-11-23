<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->bigIncrements('like_id');
            $table->unsignedBigInteger('like_user_id');
            $table->unsignedBigInteger('like_post_id');
            $table->enum('like_type', ['like', 'dislike']);
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);

            $table->foreign('like_user_id')
                ->references('user_id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('like_post_id')
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
        Schema::dropIfExists('likes');
    }
}
