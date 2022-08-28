<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ExercisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exercises')->delete();

        $trainer = DB::table('users')->where('firstName', 'Juanjo')->first();

        DB::table('exercises')->insert([
            'name' => 'Press banca inclinado',
            'equipment' => 'Mancuernas',
            'fullName'=> 'Press banca inclinado con mancuernas',
            'mainMuscle' => 'Pectoral',
            'secondMuscle' => 'Deltoides',
            'description' => '',
            'createdBy' => $trainer->id,
            'video' => ''            
        ]);

        DB::table('exercises')->insert([
            'name' => 'Sentadilla profunda',
            'equipment' => 'Barra olímpica',
            'fullName' => 'Sentadilla profunda con barra olímpica',
            'mainMuscle' => 'Cuádriceps',
            'secondMuscle' => 'Glúteo',
            'description' => '',
            'createdBy' => $trainer->id,
            'video' => ''
        ]);

        DB::table('exercises')->insert([
            'name' => 'Curl de bíceps',
            'equipment' => 'Mancuernas',
            'fullName'=> 'Curl de bíceps con mancuernas',
            'mainMuscle' => 'Bíceps',
            'secondMuscle' => '',
            'description' => '',
            'createdBy' => $trainer->id,
            'video' => ''            
        ]);

        DB::table('exercises')->insert([
            'name' => 'Curl de tríceps',
            'equipment' => 'Barra Z',
            'fullName'=> 'Curl de bíceps con barra z',
            'mainMuscle' => 'Tríceps',
            'secondMuscle' => '',
            'description' => '',
            'createdBy' => $trainer->id,
            'video' => ''            
        ]);

        DB::table('exercises')->insert([
            'name' => 'Press banca frontal',
            'equipment' => 'Barra olímpica',
            'fullName'=> 'Press banca frontal con barra olímpica',
            'mainMuscle' => 'Pectoral',
            'secondMuscle' => '',
            'description' => '',
            'createdBy' => $trainer->id,
            'video' => ''            
        ]);

        DB::table('exercises')->insert([
            'name' => 'Hip thrust',
            'equipment' => 'Barra olímpica',
            'fullName'=> 'Hip thrust con barra olímpica',
            'mainMuscle' => 'Glúteo',
            'secondMuscle' => 'Isquio',
            'description' => '',
            'createdBy' => $trainer->id,
            'video' => ''            
        ]);

        DB::table('exercises')->insert([
            'name' => 'Extensión de rodilla',
            'equipment' => 'Máquina',
            'fullName'=> 'Extensión de rodilla en máquina',
            'mainMuscle' => 'Cuádriceps',
            'secondMuscle' => '',
            'description' => '',
            'createdBy' => $trainer->id,
            'video' => ''            
        ]);

        DB::table('exercises')->insert([
            'name' => 'Dominadas',
            'equipment' => 'Barra',
            'fullName'=> 'Dominadas en barra',
            'mainMuscle' => 'Espalda',
            'secondMuscle' => '',
            'description' => '',
            'createdBy' => $trainer->id,
            'video' => ''            
        ]);

        DB::table('exercises')->insert([
            'name' => 'Jalón al pecho',
            'equipment' => 'Polea',
            'fullName'=> 'Jalón al pecho con polea',
            'mainMuscle' => 'Espalda',
            'secondMuscle' => '',
            'description' => '',
            'createdBy' => $trainer->id,
            'video' => ''            
        ]);

        DB::table('exercises')->insert([
            'name' => 'Zancadas',
            'equipment' => 'Mancuernas',
            'fullName'=> 'Zancadas con mancuernas',
            'mainMuscle' => 'Cuádriceps',
            'secondMuscle' => 'Glúteo',
            'description' => '',
            'createdBy' => $trainer->id,
            'video' => ''            
        ]);

        DB::table('exercises')->insert([
            'name' => 'Plancha abdominal',
            'equipment' => '',
            'fullName'=> 'Plancha abdominal',
            'mainMuscle' => 'Core',
            'secondMuscle' => '',
            'description' => '',
            'createdBy' => $trainer->id,
            'video' => ''            
        ]);
    }
}
