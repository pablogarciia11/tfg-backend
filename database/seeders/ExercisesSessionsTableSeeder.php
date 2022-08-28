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
        $exercise2 = DB::table('exercises')->where('name', 'Sentadilla profunda')->first();
        $exercise3 = DB::table('exercises')->where('name', 'Curl de bíceps')->first();
        $exercise4 = DB::table('exercises')->where('name', 'Curl de tríceps')->first();
        $exercise5 = DB::table('exercises')->where('name', 'Press banca frontal')->first();
        $exercise6 = DB::table('exercises')->where('name', 'Hip thrust')->first();
        $exercise7 = DB::table('exercises')->where('name', 'Extensión de rodilla')->first();
        $exercise8 = DB::table('exercises')->where('name', 'Dominadas')->first();
        $exercise9 = DB::table('exercises')->where('name', 'Jalón al pecho')->first();
        $exercise10 = DB::table('exercises')->where('name', 'Zancadas')->first();
        $exercise11 = DB::table('exercises')->where('name', 'Plancha abdominal')->first();
        
        $session = DB::table('sessions')->where('name', 'Sesión de empuje')->first();
        $session2 = DB::table('sessions')->where('name', 'Sesión de tren inferior')->first();
        $session3 = DB::table('sessions')->where('name', 'Sesión de tracción')->first();

        $sessionRoutine = DB::table('sessions_routines')->where('name', 'Sesión de empuje')->first();
        $sessionRoutine2 = DB::table('sessions_routines')->where('name', 'Sesión de tren inferior')->first();
        $sessionRoutine3 = DB::table('sessions_routines')->where('name', 'Sesión de tracción')->first();

        DB::table('exercises_sessions')->insert([
            'exerciseId' => $exercise->id,
            'name' => $exercise->fullName,
            'series' => 4,
            'minReps' => 10,
            'maxReps' => 12,
            'rest' => 60,
            'RIR' => 1,
            'observations' => 'Me ha molestado un poco el hombro',
            'sessionId' => $session->id
        ]);

        DB::table('exercises_sessions')->insert([
            'exerciseId' => $exercise4->id,
            'name' => $exercise4->fullName,
            'series' => 3,
            'minReps' => 12,
            'maxReps' => 0,
            'rest' => 60,
            'RIR' => 0,
            'observations' => '',
            'sessionId' => $session->id
        ]);

        DB::table('exercises_sessions')->insert([
            'exerciseId' => $exercise5->id,
            'name' => $exercise5->fullName,
            'series' => 4,
            'minReps' => 10,
            'maxReps' => 12,
            'rest' => 60,
            'RIR' => 1,
            'observations' => '',
            'sessionId' => $session->id
        ]);

        DB::table('exercises_sessions')->insert([
            'exerciseId' => $exercise2->id,
            'name' => $exercise2->fullName,
            'series' => 4,
            'minReps' => 10,
            'maxReps' => 12,
            'rest' => 60,
            'RIR' => 1,
            'observations' => '',
            'sessionId' => $session2->id
        ]);

        DB::table('exercises_sessions')->insert([
            'exerciseId' => $exercise6->id,
            'name' => $exercise6->fullName,
            'series' => 4,
            'minReps' => 10,
            'maxReps' => 12,
            'rest' => 60,
            'RIR' => 1,
            'observations' => '',
            'sessionId' => $session2->id
        ]);

        DB::table('exercises_sessions')->insert([
            'exerciseId' => $exercise7->id,
            'name' => $exercise7->fullName,
            'series' => 4,
            'minReps' => 10,
            'maxReps' => 12,
            'rest' => 60,
            'RIR' => 1,
            'observations' => '',
            'sessionId' => $session2->id
        ]);

        DB::table('exercises_sessions')->insert([
            'exerciseId' => $exercise10->id,
            'name' => $exercise10->fullName,
            'series' => 4,
            'minReps' => 10,
            'maxReps' => 12,
            'rest' => 60,
            'RIR' => 1,
            'observations' => '',
            'sessionId' => $session2->id
        ]);

        DB::table('exercises_sessions')->insert([
            'exerciseId' => $exercise3->id,
            'name' => $exercise3->fullName,
            'series' => 4,
            'minReps' => 10,
            'maxReps' => 12,
            'rest' => 60,
            'RIR' => 1,
            'observations' => '',
            'sessionId' => $session3->id
        ]);

        DB::table('exercises_sessions')->insert([
            'exerciseId' => $exercise8->id,
            'name' => $exercise8->fullName,
            'series' => 4,
            'minReps' => 10,
            'maxReps' => 12,
            'rest' => 60,
            'RIR' => 1,
            'observations' => '',
            'sessionId' => $session3->id
        ]);

        DB::table('exercises_sessions')->insert([
            'exerciseId' => $exercise9->id,
            'name' => $exercise9->fullName,
            'series' => 4,
            'minReps' => 10,
            'maxReps' => 12,
            'rest' => 60,
            'RIR' => 1,
            'observations' => '',
            'sessionId' => $session3->id
        ]);

        DB::table('exercises_sessions')->insert([
            'exerciseId' => $exercise11->id,
            'name' => $exercise11->fullName,
            'series' => 4,
            'minReps' => 10,
            'maxReps' => 12,
            'rest' => 60,
            'RIR' => 1,
            'observations' => '',
            'sessionId' => $session3->id
        ]);

        // For sessionsRoutines

        DB::table('exercises_sessions')->insert([
            'exerciseId' => $exercise->id,
            'name' => $exercise->fullName,
            'series' => 4,
            'minReps' => 10,
            'maxReps' => 12,
            'rest' => 60,
            'RIR' => 1,
            'observations' => 'Me ha molestado un poco el hombro',
            'sessionRoutineId' => $sessionRoutine->id
        ]);

        DB::table('exercises_sessions')->insert([
            'exerciseId' => $exercise4->id,
            'name' => $exercise4->fullName,
            'series' => 3,
            'minReps' => 12,
            'maxReps' => 0,
            'rest' => 60,
            'RIR' => 0,
            'observations' => '',
            'sessionRoutineId' => $sessionRoutine->id
        ]);

        DB::table('exercises_sessions')->insert([
            'exerciseId' => $exercise5->id,
            'name' => $exercise5->fullName,
            'series' => 4,
            'minReps' => 10,
            'maxReps' => 12,
            'rest' => 60,
            'RIR' => 1,
            'observations' => '',
            'sessionRoutineId' => $sessionRoutine->id
        ]);

        DB::table('exercises_sessions')->insert([
            'exerciseId' => $exercise2->id,
            'name' => $exercise2->fullName,
            'series' => 4,
            'minReps' => 10,
            'maxReps' => 12,
            'rest' => 60,
            'RIR' => 1,
            'observations' => '',
            'sessionRoutineId' => $sessionRoutine2->id
        ]);

        DB::table('exercises_sessions')->insert([
            'exerciseId' => $exercise6->id,
            'name' => $exercise6->fullName,
            'series' => 4,
            'minReps' => 10,
            'maxReps' => 12,
            'rest' => 60,
            'RIR' => 1,
            'observations' => '',
            'sessionRoutineId' => $sessionRoutine2->id
        ]);

        DB::table('exercises_sessions')->insert([
            'exerciseId' => $exercise7->id,
            'name' => $exercise7->fullName,
            'series' => 4,
            'minReps' => 10,
            'maxReps' => 12,
            'rest' => 60,
            'RIR' => 1,
            'observations' => '',
            'sessionRoutineId' => $sessionRoutine2->id
        ]);

        DB::table('exercises_sessions')->insert([
            'exerciseId' => $exercise10->id,
            'name' => $exercise10->fullName,
            'series' => 4,
            'minReps' => 10,
            'maxReps' => 12,
            'rest' => 60,
            'RIR' => 1,
            'observations' => '',
            'sessionRoutineId' => $sessionRoutine2->id
        ]);

        DB::table('exercises_sessions')->insert([
            'exerciseId' => $exercise3->id,
            'name' => $exercise3->fullName,
            'series' => 4,
            'minReps' => 10,
            'maxReps' => 12,
            'rest' => 60,
            'RIR' => 1,
            'observations' => '',
            'sessionRoutineId' => $sessionRoutine3->id
        ]);

        DB::table('exercises_sessions')->insert([
            'exerciseId' => $exercise8->id,
            'name' => $exercise8->fullName,
            'series' => 4,
            'minReps' => 10,
            'maxReps' => 12,
            'rest' => 60,
            'RIR' => 1,
            'observations' => '',
            'sessionRoutineId' => $sessionRoutine3->id
        ]);

        DB::table('exercises_sessions')->insert([
            'exerciseId' => $exercise9->id,
            'name' => $exercise9->fullName,
            'series' => 4,
            'minReps' => 10,
            'maxReps' => 12,
            'rest' => 60,
            'RIR' => 1,
            'observations' => '',
            'sessionRoutineId' => $sessionRoutine3->id
        ]);

        DB::table('exercises_sessions')->insert([
            'exerciseId' => $exercise11->id,
            'name' => $exercise11->fullName,
            'series' => 4,
            'minReps' => 10,
            'maxReps' => 12,
            'rest' => 60,
            'RIR' => 1,
            'observations' => '',
            'sessionRoutineId' => $sessionRoutine3->id
        ]);
    }
}
