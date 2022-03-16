<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class InfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('informations')->delete();

        $user = DB::table('users')->where('firstName', 'Pablo')->first();

        DB::table('informations')->insert([
            'date' => '2022-02-22',
            'height' => 178,
            'weight' => 75.3,
            'userId' => $user->id
        ]);
    }
}
