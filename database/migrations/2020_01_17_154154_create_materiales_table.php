<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->morphs('unidad_medida_id');
            $table->string('material',100);
            $table->string('abreviatura',10);
            $table->enum('tipo',['equipo', 'material','reactivo'])->comment('Almacena el status ');
            $table->enum('estatus',['activo','inactivo'])->comment('almacena el status del registro');
            $table->timestampsTz('created_at',0);
            $table->timestampsTz('updated_at',0);
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
        Schema::dropIfExists('materiales');
    }
}
