<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleFormatosLaboratorioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_formatos_laboratorio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('formato_laboratorio_id')->comment('Almacenamiento del formato de laboratorio');
            $table->unsignedInteger('material_id')->comment('Almacenamiento de la materia id');
            $table->unsignedInteger('unidad_medida_id')->comment('Almacenamiento de la unidad de medida id');
            $table->decimal('cantidad', 10, 4)->comment('Almacenamiento del decimal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_formatos_laboratorio');
    }
}
