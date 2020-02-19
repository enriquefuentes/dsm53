<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormatosLaboratorioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formatos_laboratorio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('grupo_laboratorio_id')->comment('Almacenamiento del laboratorio id');
            $table->unsignedInteger('asiginatura_id')->comment('Almacenamiento de la asignatura id');
            $table->unsignedInteger('docente_id')->comment('Almacenamiento del docente id');
            $table->date('fecha_formato')->comment('Almacenamiento de la fecha del formato');
            $table->string('archivo_formato', 100)->comment('Almacenamiento del archivo formato');
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
        Schema::dropIfExists('formatos_laboratorio');
    }
}
