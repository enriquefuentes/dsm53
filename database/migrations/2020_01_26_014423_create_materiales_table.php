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
            $table->unsignedInteger('unidad_medida_id')->comment('Almacenamiento del formato de laboratorio');
            $table->string('material', 100)->comment('Almacenamiento de la materia');
            $table->string('abreviatura', 30)->comment('Almacenamiento de la abreviatura');
            $table->string('tipo', 30)->comment('Almacenamiento del tipo de material');
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
        Schema::dropIfExists('materiales');
    }
}
