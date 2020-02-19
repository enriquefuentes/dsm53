<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposLaboratoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos_laboratorios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('cuatrimestre_id')->comment('Almacenamiento del formato de laboratorio');
            $table->unsignedInteger('direccion_id')->comment('Almacenamiento del formato de laboratorio');
            $table->unsignedInteger('carrera_id')->comment('Almacenamiento del formato de laboratorio');
            $table->unsignedInteger('asignatura_id')->comment('Almacenamiento del formato de laboratorio');
            $table->unsignedInteger('docente_id')->comment('Almacenamiento del formato de laboratorio');
            $table->dateTime('dias_asignandos')->comment('Almacenamiento de la materia');
            $table->dateTime('lunes_inicio')->comment('Almacenamiento de la materia');
            $table->dateTime('lunes_fin')->comment('Almacenamiento de la materia');
            $table->dateTime('martes_inicio')->comment('Almacenamiento de la materia');
            $table->dateTime('martes_fin')->comment('Almacenamiento de la abreviatura');
            $table->dateTime('miercoles_inicio')->comment('Almacenamiento de la abreviatura');
            $table->dateTime('miercoles_fin')->comment('Almacenamiento de la abreviatura');
            $table->dateTime('jueves_inicio')->comment('Almacenamiento de la abreviatura');
            $table->dateTime('jueves_fin')->comment('Almacenamiento de la abreviatura');
            $table->dateTime('viernes_inicio')->comment('Almacenamiento de la abreviatura');
            $table->dateTime('viernes_fin')->comment('Almacenamiento de la abreviatura');
            $table->dateTime('sabado_inicio')->comment('Almacenamiento de la abreviatura');
            $table->dateTime('sabado_fin')->comment('Almacenamiento de la abreviatura');
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
        Schema::dropIfExists('grupos_laboratorios');
    }
}
