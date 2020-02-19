<?php

use Illuminate\Database\Seeder;

class Detalle_formatos_laboratorioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
        {
            DB::table('detalle_formatos_laboratorio')->insert([
                    [
    
                    'id' => 1
                    ,'formato_laboratorio_id' => '1'
                    , 'material_id' => '2'
                    , 'unidad_medida_id' => '3'
                    , 'cantidad' => '0.2432'
                ]
                ,[
                    'id' => 2
                    ,'formato_laboratorio_id' => '2'
                    , 'material_id' => '3'
                    , 'unidad_medida_id' => '4'
                    , 'cantidad' => '0.3568'
                    ]
                 ]   
            );
        }
    }
    