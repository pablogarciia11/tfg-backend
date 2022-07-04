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

        $trainer = DB::table('users')->where('firstName', 'Juanjo')->first();

        DB::table('sessions')->insert([
            'name' => 'Sesión de empuje',
            'description' => 'Sesión de empuje para trabajar el torso',
            'createdBy' => $trainer->id
        ]);
    }
}
