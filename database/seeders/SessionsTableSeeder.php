<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sessions')->delete();

        $user = DB::table('users')->where('firstName', 'Pablo')->first();
        $trainer = DB::table('users')->where('firstName', 'Juanjo')->first();

        DB::table('sessions')->insert([
            'name' => 'Sesión de tracción',
            'description' => 'Sesión de tracción para trabajar el torso.',
            'date' => null,
            'completed' => false,
            'userName' => $user->firstName . ' ' . $user->lastName,
            'userId' => $user->id,
            'createdBy' => $trainer->id
        ]);

        DB::table('sessions')->insert([
            'name' => 'Sesión de tren inferior',
            'description' => 'Sesión destinada a ganar fuerza en el tren inferior.',
            'date' => null,
            'completed' => false,
            'userName' => $user->firstName . ' ' . $user->lastName,
            'userId' => $user->id,
            'createdBy' => $trainer->id
        ]);

        DB::table('sessions')->insert([
            'name' => 'Sesión de empuje',
            'description' => 'Sesión de empuje para trabajar el torso.',
            'date' => null,
            'completed' => false,
            'userName' => $user->firstName . ' ' . $user->lastName,
            'userId' => $user->id,
            'createdBy' => $trainer->id
        ]);
    }
}
