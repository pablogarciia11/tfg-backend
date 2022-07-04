<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ExercisesSessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exercises_sessions')->delete();

        $exercise = DB::table('exercises')->where('name', 'Press banca inclinado')->first();
        $session = DB::table('sessions')->where('name', 'Sesión de empuje')->first();

        $equipmentName = strtolower($exercise->equipment);

        $name = empty($equipmentName) ? $exercise->name : ($exercise->name . ' con ' . $equipmentName);

        DB::table('exercises_sessions')->insert([
            'exerciseId' => $exercise->id,
            'name' => $name,
            'series' => 4,
            'minReps' => 10,
            'maxReps' => 12,
            'rest' => 60,
            'RIR' => 1,
            'observations' => 'Me ha molestado un poco el hombro',
            'sessionId' => $session->id
        ]);
    }
}
