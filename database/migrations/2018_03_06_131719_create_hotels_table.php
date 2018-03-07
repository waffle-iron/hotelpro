<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('nom_proprio')->nullable();
            $table->string('tel');
            $table->string('tel_proprio')->nullable();
            $table->string('email');
            $table->string('email_proprio')->nullable();
            $table->string('contact')->nullable();
            $table->string('logo')->default('hotel.svg');
            $table->string('cover')->nullable('cover.svg');
            $table->string('longlat')->nullable();
            $table->string('place');
            $table->string('num_place',15)->nullable();
            $table->string('ville');
            $table->string('pays');
            $table->unsignedTinyInteger('nbre_etoile')->default(1);
            $table->unsignedTinyInteger('status')->default(0);
            $table->string('prix_min')->comment('chambre la moins cher')->nullable();
            $table->string('prix_max')->comment('chambre la plus  cher')->nullable();
            $table->text('desc')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('hotels');
    }
}
