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
    }
}
