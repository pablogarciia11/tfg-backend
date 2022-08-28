<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert([
            'firstName' => 'Juanjo',
            'lastName' => 'Colado Sanchez',
            'email' => 'juanjose@gmail.com',
            'userName' => 'jcolado',
            'password' => '$2y$10$7WQUrAVvxfHSQ8uqv0fe4OoZ/lg2rc5zX54w8QJ1q2WvSAnXTtyEu',
            'birth' => '1998-10-16',
            'role' => 'trainer',
            'trainer' => null
        ]);

        DB::table('users')->insert([
            'firstName' => 'Admin',
            'lastName' => 'Administrador',
            'email' => 'admin@gmail.com',
            'userName' => 'admin',
            'password' => '$2y$10$7WQUrAVvxfHSQ8uqv0fe4OoZ/lg2rc5zX54w8QJ1q2WvSAnXTtyEu',
            'birth' => '1998-10-16',
            'role' => 'admin',
            'trainer' => 1
        ]);

        DB::table('users')->insert([
            'firstName' => 'Pablo',
            'lastName' => 'García Tolosa',
            'email' => 'garciatolosap@gmail.com',
            'userName' => 'pgarcia',
            'password' => '$2y$10$7WQUrAVvxfHSQ8uqv0fe4OoZ/lg2rc5zX54w8QJ1q2WvSAnXTtyEu',
            'birth' => '1998-10-16',
            'role' => 'customer',
            'trainer' => 1
        ]);
    }
}
