<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direcciones', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Identificador de direcciones');
            $table->string('direccion', 100)->comment('Almacena el nombre de la direccion');
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
        Schema::dropIfExists('direcciones');
    }
}
