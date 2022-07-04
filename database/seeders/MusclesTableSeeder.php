<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MusclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('muscles')->delete();

        $exercise = DB::table('exercises')->where('name', 'Press banca inclinado')->first();

        DB::table('muscles')->insert([
            'name' => 'Pectoral',
            'type' => 'Principal',
            'exerciseId' => $exercise->id 
        ]);

        DB::table('muscles')->insert([
            'name' => 'Tríceps',
            'type' => 'Secundario',
            'exerciseId' => $exercise->id 
        ]);
    }
}
