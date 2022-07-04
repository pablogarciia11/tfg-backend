<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert([
            'firstName' => 'Pablo',
            'lastName' => 'García Tolosa',
            'email' => 'garciatolosap@gmail.com',
            'userName' => 'pgarcia',
            'password' => '1029u109219029',
            'birth' => '1998-10-16',
            'type' => 'Usuario',
            'trainer' => 1
        ]);

        DB::table('users')->insert([
            'firstName' => 'Juanjo',
            'lastName' => 'Colado Sanchez',
            'email' => 'juanjose@gmail.com',
            'userName' => 'jcolado',
            'password' => '1029u109219029',
            'birth' => '1998-10-16',
            'type' => 'Entrenador',
            'trainer' => 1
        ]);
    }
}
