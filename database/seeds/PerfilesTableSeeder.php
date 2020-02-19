<?php

use Illuminate\Database\Seeder;

class PerfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perfiles')->insert([
            [

            'id' => 1
            , 'perfil' => 'daniel'
            , 'estatus' => 'Activo'
            , 'created_at' => '2020-01-11 07:53:00'
            , 'updated_at' => '2020-01-11 07:53:00'
        ]
         ,[
                'id' => 2
                , 'nombre' => 'juan'
                , 'estatus' => 'Activo'
                , 'created_at' => '2020-01-11 07:53:00'
                , 'updated_at' => '2020-01-11 07:53:00'
                 ] 
            ]     
         );
    }
}
