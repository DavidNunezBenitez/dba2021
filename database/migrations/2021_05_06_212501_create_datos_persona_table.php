<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosPersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_persona', function (Blueprint $table) {
            $table->bigIncrements('pk_datos_persona');
            $table->integer('fk_persona');
            $table->string('email', 220)->nullable();
            $table->string('telefono', 10);
            $table->string('celular',10);
            $table->foreign('fk_persona')->references('pk_persona')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_persona');
    }
}
