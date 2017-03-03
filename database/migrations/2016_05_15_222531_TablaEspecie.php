<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaEspecie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especies', function (Blueprint $table) {
            $table->increments('id');

            $table->string("nombre_comun");
            $table->string("nombre_cientifico");
            $table->string("descripcion");
            $table->string("peso");
            $table->string("altura");
            $table->string("dato_curioso");
            $table->integer("id_coleccion")->unsigned();
            $table->integer("id_area")->unsigned();
            $table->integer("id_color")->unsigned();
            $table->boolean("estatus");
            $table->timestamps();

            $table->foreign("id_coleccion")->references("id")->on("coleccions");
            $table->foreign("id_area")->references("id")->on("areas");
            $table->foreign("id_color")->references("id")->on("colors");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('especies');
    }
}
