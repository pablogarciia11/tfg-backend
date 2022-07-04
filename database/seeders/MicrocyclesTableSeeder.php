<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MicrocyclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('microcycles')->delete();

        $routine = DB::table('routines')->where('name', 'Rutina fullbody')->first();

        DB::table('microcycles')->insert([
            'number' => 1,
            'times' => 3,
            'routineId' => $routine->id
        ]);
    }
}
