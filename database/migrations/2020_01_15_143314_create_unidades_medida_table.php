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
            $table->bigIncrements('id')->comment('Identificador unico de la tabla');
            $table->insignedInteger('unidad_medida_id')->comment('referencia al registro de unidad de medida');
            $table->string('material', 100)->comment('almacena el nombre completo del material');
            $table->string('abreviatura',10)->comnmet('almacena la abreviatura del material');
            $table->enum('tipo',['equipo', 'material','reactivo'])->comment('Almacena el status ');
            $table->enum('estatus',['activo','inactivo'])->comment('almacena el status del registro');
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
