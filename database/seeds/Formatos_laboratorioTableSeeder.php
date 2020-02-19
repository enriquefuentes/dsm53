<?php

use Illuminate\Database\Seeder;

class Formatos_laboratorioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formatos_laboratorio')->insert([
                [

                'id' => 1
                ,'grupo_laboratorio_id' => '2'
                , 'grupo_laboratorio_id' => '3'
                , 'docente_id' => '4'
                , 'fecha_formato' => '2020-01-11'
                , 'archivo_formato' => 'digital'
                , 'created_at' => '2020-01-11 07:53:00'
                , 'updated_at' => '2020-01-11 07:53:00'
            ]
            ,[
                'id' => 2
                ,'grupo_laboratorio_id' => '2'
                , 'grupo_laboratorio_id' => '3'
                , 'docente_id' => '4'
                , 'fecha_formato' => '2020-01-11'
                , 'archivo_formato' => 'digital'
                , 'created_at' => '2020-01-11 07:53:00'
                , 'updated_at' => '2020-01-11 07:53:00'

                ]
             ]   
        );
    }
}
