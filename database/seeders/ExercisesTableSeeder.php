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
            'name' => 'Press Banca',
            'muscle' => 'Pectoral',
            'equipment' => 'Barra olimpica',
            'description' => '',
            'video' => '',
            'createdBy' => $trainer->id
        ]);

        DB::table('exercises')->insert([
            'name' => 'Sentadilla profunda',
            'muscle' => 'Cuádriceps',
            'equipment' => 'Barra olimpica',
            'description' => '',
            'video' => '',
            'createdBy' => $trainer->id
        ]);
    }
}
