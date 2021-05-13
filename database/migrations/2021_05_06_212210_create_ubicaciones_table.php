<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUbicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicaciones', function (Blueprint $table) {
            $table->bigIncrements('pk_cp');
            $table->integer('d_codigo');
            $table->string('d_acenta', 220);
            $table->string('d_tipo_asenta', 45);
            $table->string('d_mnpio', 200); 
            $table->string('d_estado', 45);
            $table->string('d_ciudad', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ubicaciones');
    }
}
