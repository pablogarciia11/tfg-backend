<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class WeekDaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sessiondays')->delete();

        $session = DB::table('sessions')->first();
        $microcycle = DB::table('microcycles')->where('number', 1)->first();

        DB::table('sessiondays')->insert([
            'day' => 'Lunes',
            'sessionId' => $session->id,
            'microcycleId' => $microcycle->id
        ]);
    }
}
