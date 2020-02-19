<?php

use Illuminate\Database\Seeder;

class DireccionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('direcciones')->insert([
                [

                'id' => 1
                ,'direccion' => 'tecnologias de la informacion y comunicacion'
                , 'abreviatura' => 'DSM'
                , 'estatus' => 'Activo'
                , 'created_at' => '2020-01-11 07:53:00'
                , 'updated_at' => '2020-01-11 07:53:00'
            ]
            ,[
                'id' => 2
                ,'direccion' => 'Infraestructura de redes de datos'
                , 'abreviatura' => 'IRD'
                , 'estatus' => 'Activo'
                , 'created_at' => '2020-01-11 07:53:00'
                , 'updated_at' => '2020-01-11 07:53:00'

                ]
             ]   
        );
    }
}
