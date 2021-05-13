<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDependenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependencias', function (Blueprint $table) {
            $table->bigIncrements('pk_dependencia');
            $table->string('nombre',100);
            $table->string('area',100);
            $table->string('depto',100);
            $table->string('descrip',100);
            $table->integer('fk_id_empleado');
            $table->foreign('fk_id_empleado')->references('pk_empleado')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dependencias');
    }
}
