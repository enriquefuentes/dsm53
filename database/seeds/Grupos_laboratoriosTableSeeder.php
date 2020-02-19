 <?php

use Illuminate\Database\Seeder;

class Grupos_laboratoriosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grupos_laboratorios')->insert([
                [

                'id' => 1
                ,'cuatrimestre_id' => '1'
                ,'direccion_id' => '1'
                , 'carrera_id' => '2'
                , 'asignatura_id' => '3'
                , 'docente_id' => '4'
                , 'dias_asignandos' => '2020-01-11 07:53:00'
                , 'lunes_inicio' => '2020-01-11 07:53:00'
                , 'lunes_fin' => '2020-01-11 07:53:00'
                , 'martes_inicio' => '2020-01-11 07:53:00'
                , 'martes_fin' => '2020-01-11 07:53:00'
                , 'miercoles_inicio' => '2020-01-11 07:53:00'
                , 'miercoles_fin' => '2020-01-11 07:53:00'
                , 'jueves_inicio' => '2020-01-11 07:53:00'
                , 'jueves_fin' => '2020-01-11 07:53:00'
                , 'viernes_inicio' => '2020-01-11 07:53:00'
                , 'viernes_fin' => '2020-01-11 07:53:00'
                , 'sabado_inicio' => '2020-01-11 07:53:00'
                , 'sabado_fin' => '2020-01-11 07:53:00'
                , 'estatus' => 'Activo'
                , 'created_at' => '2020-01-11 07:53:00'
                , 'updated_at' => '2020-01-11 07:53:00'
            ]
            ,[
                'id' => 2
                ,'cuatrimestre_id' => '2'
                ,'direccion_id' => '2'
                , 'carrera_id' => '5'
                , 'asignatura_id' => '7'
                , 'docente_id' => '8'
                , 'dias_asignandos' => '2020-01-11 07:53:00'
                , 'lunes_inicio' => '2020-01-11 07:53:00'
                , 'lunes_fin' => '2020-01-11 07:53:00'
                , 'martes_inicio' => '2020-01-11 07:53:00'
                , 'martes_fin' => '2020-01-11 07:53:00'
                , 'miercoles_inicio' => '2020-01-11 07:53:00'
                , 'miercoles_fin' => '2020-01-11 07:53:00'
                , 'jueves_inicio' => '2020-01-11 07:53:00'
                , 'jueves_fin' => '2020-01-11 07:53:00'
                , 'viernes_inicio' => '2020-01-11 07:53:00'
                , 'viernes_fin' => '2020-01-11 07:53:00'
                , 'sabado_inicio' => '2020-01-11 07:53:00'
                , 'sabado_fin' => '2020-01-11 07:53:00'
                , 'estatus' => 'Activo'
                , 'created_at' => '2020-01-11 07:53:00'
                , 'updated_at' => '2020-01-11 07:53:00'
                ]
             ]   
        );
    }
}
