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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid');
            $table->string('api_token')->nullable();
            $table->string('nom');
            $table->string('prenom')->nullable();
            $table->string('email');
            $table->string('tel')->nullable();
            $table->string('password');
            $table->string('password_token')->comment('jwt token qui contient le mot de passe en clair');
            $table->string('cni')->nullable();
            $table->string('avatar')->default('avatar.svg');
            $table->text('permissions')->nullable();
            $table->tinyInteger('type');
            $table->unsignedInteger('role_id')->nullable();
            $table->rememberToken();
            $table->timestamps();

            //$table->unique('uuid');
            //$table->unique('email');
            //$table->unique('tel');
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
    }
}
