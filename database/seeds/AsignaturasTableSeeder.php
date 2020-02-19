<?php

use Illuminate\Database\Seeder;

class AsignaturasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asignaturas')->insert([
                 [
                 'id' => 1
                 , 'carrera_id' => '1'
                 , 'asignatura' => 'tecnologias de la informacion y comunicacion'
                 , 'abreviatura' => 'DSM'
                 , 'estatus' => 'Activo'
                 , 'created_at' => '2020-01-11 07:53:00'
                 , 'updated_at' => '2020-01-11 07:53:00'
             ]
             ,[
                 'id' => 2
                 ,'carrera_id' => '2'
                 ,'asignatura' => 'insfraestructura de redes informaticos'
                 , 'abreviatura' => 'IRD'
                 , 'estatus' => 'Activo'
                 , 'created_at' => '2020-01-11 07:53:00'
                 , 'updated_at' => '2020-01-11 07:53:00'
 
                 ]
              ]   
         );
     }
 }
