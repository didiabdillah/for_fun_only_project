<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->bigIncrements('report_id');
            $table->unsignedBigInteger('report_reporter_user_id');
            $table->unsignedBigInteger('report_reported_post_id')->nullable();
            $table->unsignedBigInteger('report_reported_user_id')->nullable();
            $table->string('report_text', 1023);
            $table->enum('report_status', ['read', 'pending']);
            $table->enum('report_type', ['account', 'post']);
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);

            $table->foreign('report_reporter_user_id')
                ->references('user_id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
