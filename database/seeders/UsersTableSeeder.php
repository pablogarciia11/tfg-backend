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
            'fullName' => 'Juanjo Colado Sanchez',
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
            'fullName' => 'Admin Administrador',
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
            'fullName' => 'Pablo García Tolosa',
            'email' => 'garciatolosap@gmail.com',
            'userName' => 'pgarcia',
            'password' => '$2y$10$7WQUrAVvxfHSQ8uqv0fe4OoZ/lg2rc5zX54w8QJ1q2WvSAnXTtyEu',
            'birth' => '1998-10-16',
            'role' => 'customer',
            'trainer' => 1
        ]);

        DB::table('users')->insert([
            'firstName' => 'José Ramón',
            'lastName' => 'García Bernabeu',
            'fullName' => 'José Ramón García Bernabeu',
            'email' => 'jrgarcia@gmail.com',
            'userName' => 'jrgarcia',
            'password' => '$2y$10$7WQUrAVvxfHSQ8uqv0fe4OoZ/lg2rc5zX54w8QJ1q2WvSAnXTtyEu',
            'birth' => '1967-08-31',
            'role' => 'customer'
        ]);

        DB::table('users')->insert([
            'firstName' => 'Mari Carmen',
            'lastName' => 'Tolosa Bailén',
            'fullName' => 'Mari Carmen Tolosa Bailén',
            'email' => 'mc.tolosa@gmail.com',
            'userName' => 'mctolosa',
            'password' => '$2y$10$7WQUrAVvxfHSQ8uqv0fe4OoZ/lg2rc5zX54w8QJ1q2WvSAnXTtyEu',
            'birth' => '1967-11-21',
            'role' => 'customer'
        ]);
    }
}
