<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaboratorioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratorio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('laboratorio',100);
            $table->string('abreviatura',10);
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
        Schema::dropIfExists('laboratorio');
    }
}
