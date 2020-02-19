<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $token = "fYCjcY6wya63N3R3VD9P96A2fc046MNep9816N50L7xv7seyttSOz53NrsiI";
        User::insert([
            'name' => 'Decadente'
            , 'email' => 'al221811690@gmail.com'
            , 'password' => bcrypt ('552883407a')
            , 'api_token' => hash('sha256', $token)
            , 'created_at' => Carbon::now('America/Mexico_City')->format('Y-m-d H:i:s')
            , 'updated_at' => Carbon::now('America/Mexico_City')->format('Y-m-d H:i:s')
        ]);
    }
}
