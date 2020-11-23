<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->bigIncrements('notification_id');
            $table->unsignedBigInteger('notification_user_id');
            $table->unsignedBigInteger('notification_post_id');
            $table->string('notofication_text', 1023);
            $table->enum('notification_status', ['read', 'pending']);
            $table->enum('notification_type', ['comment', 'reply']);
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);

            $table->foreign('notification_user_id')
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
        Schema::dropIfExists('notifications');
    }
}
