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
        $routine = DB::table('routines')->where('name', 'Rutina fullbody')->first();

        DB::table('sessions')->insert([
            'name' => 'Sesión de empuje',
            'objective' => 'Hipertrofiar',
            'length' => 60,
            'date' => '2022-03-02',
            'description' => 'Sesión de empuje para trabajar el torso',
            'createdBy' => $trainer->id,
            'assignedTo' => $user->id,
            'routineId' => $routine->id
        ]);
    }
}
