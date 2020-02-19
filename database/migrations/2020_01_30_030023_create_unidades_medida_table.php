<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesMedidaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades_medida', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('unidad_medida', 30)->comment('Almacenamiento de la unidad de medida');
            $table->string('abreviatura', 30)->comment('Almacenamiento de la abreviatura');
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
        Schema::dropIfExists('unidades_medida');
    }
}
