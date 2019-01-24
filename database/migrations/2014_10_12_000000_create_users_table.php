<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function(Blueprint $table){

            $table->increments('id');
            $table->string('name')->comment('Nombre del rol del usuario');
            $table->text('description');
            $table->timestamps();

        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('role_id')->default(\App\Role::INVITED);
            $table->foreign('role_id')->references('id')->on('roles');
            $table->string('name');
            $table->string('last_name')->nullable();
            $table->string('slug');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('picture')->nullable();//esto es para la imagen del usuario en la plataforma

            //cashier columns
            $table->string('stripe_id')->nullable(); //nos va a servir para saber si el usuario esta ya registrado a algun plan utilizando cashier
            $table->string('card_brand')->nullable();
            $table->string('card_last_four')->nullable();
            $table->timestamp('trial_ends_at')->nullable();
            $table->timestamp('ends_at')->nullable();
            $table->rememberToken();
            $table->timestamps();


        });
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->string('stripe_id');
            $table->string('stripe_plan');
            $table->integer('quantity');
            $table->timestamp('trial_ends_at')->nullable();
            $table->timestamp('ends_at')->nullable();
            $table->timestamps();

        });

        //sirve para poder registrar los usuarios que se quieran registrar con redes sociales
        Schema::create('user_social_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('provider');//puede ser github twiter facebook google
            $table->string('provider_uid');//id del usuario en fb github tw
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('users');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('subscriptions');
        Schema::dropIfExists('user_social_accounts');
    }
}
