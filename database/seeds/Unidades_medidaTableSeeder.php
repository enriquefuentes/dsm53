<?php

use Illuminate\Database\Seeder;

class Unidades_medidaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unidades_medida')->insert([
            [

            'id' => 1
            , 'unidad_medida' => 'mg.L'
            , 'abreviatura' => 'CI'
            , 'estatus' => 'Activo'
            , 'created_at' => '2020-01-11 07:53:00'
            , 'updated_at' => '2020-01-11 07:53:00'
        ]
         ,[
            'id' => 2
            , 'unidad_medida' => 'U.C'
            , 'abreviatura' => 'COLOR'
            , 'estatus' => 'Activo'
            , 'created_at' => '2020-01-11 07:53:00'
            , 'updated_at' => '2020-01-11 07:53:00'
                 ] 
            ]     
         );
    }
}
