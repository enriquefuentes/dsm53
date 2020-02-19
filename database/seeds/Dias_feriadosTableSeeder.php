<?php

use Illuminate\Database\Seeder;

class Dias_feriadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dias_feriados')->insert([
                [

                'id' => '2020-01-11'
            ]
            ,[
                'id' => '2020-02-21'
                ]
             ]   
        );
    }
}