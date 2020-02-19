<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignaturas', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('almacenamiento del id');
            $table->unsignedInteger('carrera_id')->comment('Almacenamiento de la carrera id');
            $table->string('asignatura', 100)->comment('Almacenamiento de las asignaturas');
            $table->string('abreviatura', 10)->comment('Almacenamiento de abreviaturas');
            $table->enum('estatus',['Activo', 'Inactivo'])->comment('Alamacenar estatus');
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
        Schema::dropIfExists('asignaturas');
    }
}
