<?php

use Illuminate\Database\Seeder;

class MaterialesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materiales')->insert([
            [
            'id' => 1
            , 'unidad_medida_id' => '1'
            , 'material' => 'computadora'
            , 'abreviatura' => 'PC'
            , 'tipo' => 'fisica'
            , 'estatus' => 'Activo'
            , 'created_at' => '2020-01-11 07:53:00'
            , 'updated_at' => '2020-01-11 07:53:00'
        ]
        ,[
            'id' => 2
            ,'unidad_medida_id' => '2'
            ,'material' => 'mause'
            , 'abreviatura' => 'MAUS'
            , 'tipo' => 'fisica'
            , 'estatus' => 'Activo'
            , 'created_at' => '2020-01-11 07:53:00'
            , 'updated_at' => '2020-01-11 07:53:00'

            ]
         ]   
    );
}
}

    
