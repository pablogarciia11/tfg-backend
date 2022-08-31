<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PetitionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('petitions')->delete();

        $sender = DB::table('users')->where('firstName', 'Juanjo')->first();
        $receiver = DB::table('users')->where('firstName', 'José Ramón')->first();

        DB::table('petitions')->insert([
            'date' => '2022-02-22',
            'status' => 'cancelled',
            'senderName' => $sender->fullName,
            'senderUserName' => $sender->userName,
            'sender' => $sender->id,
            'receiver' => $receiver->id
        ]);

        DB::table('petitions')->insert([
            'date' => '2022-02-22',
            'status' => 'rejected',
            'senderName' => $sender->fullName,
            'senderUserName' => $sender->userName,
            'sender' => $sender->id,
            'receiver' => $receiver->id
        ]);

        DB::table('petitions')->insert([
            'date' => '2022-02-22',
            'status' => 'pending',
            'senderName' => $sender->fullName,
            'senderUserName' => $sender->userName,
            'sender' => $sender->id,
            'receiver' => $receiver->id
        ]);
    }
}
