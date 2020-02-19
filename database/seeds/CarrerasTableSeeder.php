<?php

use Illuminate\Database\Seeder;

class CarrerasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('carreras')->insert([
                [
                'id' => 1
                , 'direccion_id' => '1'
                , 'carrera' => 'tecnologias de la informacion y comunicacion'
                , 'abreviatura' => 'DSM'
                , 'estatus' => 'Activo'
                , 'created_at' => '2020-01-11 07:53:00'
                , 'updated_at' => '2020-01-11 07:53:00'
            ]
            ,[
                'id' => 2
                ,'direccion_id' => '2'
                ,'carrera' => 'insfraestructura de redes informaticos'
                , 'abreviatura' => 'IRD'
                , 'estatus' => 'Activo'
                , 'created_at' => '2020-01-11 07:53:00'
                , 'updated_at' => '2020-01-11 07:53:00'

                ]
             ]   
        );
    }
}

