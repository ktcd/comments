<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InitialCommentsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('ktcd_comments.comment_table'), function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sender_id')->index()->nullable();
            $table->string('sender_type')->index()->nullable();
            $table->unsignedBigInteger('post_id')->index()->nullable();
            $table->string('post_type')->index()->nullable();
            $table->longText('text')->nullable();
            $table->boolean('was_read')->default(0);
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
        Schema::dropTable(config('ktcd_comments.comment_table'));
    }
}
