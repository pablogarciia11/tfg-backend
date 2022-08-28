<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RoutinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('routines')->delete();

        $user = DB::table('users')->where('firstName', 'Pablo')->first();
        $trainer = DB::table('users')->where('firstName', 'Juanjo')->first();

        DB::table('routines')->insert([
            'name' => 'Rutina fullbody',
            'length' => 1,
            'startDate' => date('Y-m-d'),
            'endDate' => '2022-09-07',
            'description' => 'Rutina para entrenar todo el cuerpo',
            'completed' => false,
            'userName' => $user->firstName . ' ' . $user->lastName,
            'userId' => $user->id,
            'createdBy' => $trainer->id
        ]);
    }
}
