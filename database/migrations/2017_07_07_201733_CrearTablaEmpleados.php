<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEmpleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('usuario_id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cargo');
            $table->integer('telefono');
            $table->integer('departamento_id')->unsigned();
            $table->foreign('departamento_id')->references('departamento_id')->on('departamentos');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
