<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomicilioPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilio_personas', function (Blueprint $table) {
            $table->bigIncrements('pk_personaDom');
            $table->string('calle', 220);
            $table->string('no_ext', 5);
            $table->string('no_int', 5);
            $table->integer('fk_persona');
            $table->integer('fk_cp');
            $table->foreign('fk_cp')->references('pk_cp')->on('ubicaciones');
            $table->foreign('fk_persona')->references('pk_persona')->on('personas');
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
        Schema::dropIfExists('domicilio_personas');
    }
}
