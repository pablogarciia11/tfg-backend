<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SessionRoutineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sessions_routines')->delete();

        $session = DB::table('sessions')->where('name', 'Sesión de tracción')->first();
        $session2 = DB::table('sessions')->where('name', 'Sesión de tren inferior')->first();
        $session3 = DB::table('sessions')->where('name', 'Sesión de empuje')->first();
        $routine = DB::table('routines')->first();

        DB::table('sessions_routines')->insert([
            'weekDay' => 'Lunes',
            'name' => $session->name,
            'day' => 0,
            'date' => '2022-09-07',
            'completed' => false,
            'sessionId' => $session->id,
            'routineId' => $routine->id
        ]);

        DB::table('sessions_routines')->insert([
            'weekDay' => 'Miércoles',
            'name' => $session2->name,
            'day' => 2,
            'date' => '2022-09-09',
            'completed' => false,
            'sessionId' => $session2->id,
            'routineId' => $routine->id
        ]);

        DB::table('sessions_routines')->insert([
            'weekDay' => 'Viernes',
            'name' => $session3->name,
            'day' => 4,
            'date' => '2022-09-11',
            'completed' => false,
            'sessionId' => $session3->id,
            'routineId' => $routine->id
        ]);
    }
}
