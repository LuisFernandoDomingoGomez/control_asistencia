<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->string('nombre');
            $table->string('departamento');
            $table->float('tiempo_requerido');
            $table->float('tiempo_real');
            $table->float('retardo')->nullable();
            $table->integer('retardo_minutos')->nullable();
            $table->integer('salida_temprano')->nullable();
            $table->integer('salida_temprano_minutos')->nullable();
            $table->integer('tiempo_extra_normal')->nullable();
            $table->integer('tiempo_extra_especial')->nullable();
            $table->string('asistencias')->nullable();
            $table->integer('v')->nullable();
            $table->integer('f')->nullable();
            $table->integer('p')->nullable();
            $table->string('bono_nota')->nullable();
            $table->string('bono_extra')->nullable();
            $table->string('bono')->nullable();
            $table->string('deduccion_tarde')->nullable();
            $table->string('deduccion_salida')->nullable();
            $table->string('deduccion_otro')->nullable();
            $table->integer('real')->nullable();
            $table->string('observacion')->nullable();
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
        Schema::dropIfExists('asistencias');
    }
}
