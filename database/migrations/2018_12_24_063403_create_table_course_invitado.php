<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCourseInvitado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitado_post', function(Blueprint $table){


            $table->unsignedInteger('post_id');
            $table->foreign('post_id')->references('id')->on('posts');

            $table->unsignedInteger('invitado_id');
            $table->foreign('invitado_id')->references('id')->on('invitados');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invitado_post');
    }
}
