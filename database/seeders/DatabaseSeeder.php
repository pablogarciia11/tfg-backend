<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->command->info('Users table seeded!');

        $this->call(InfoTableSeeder::class);
        $this->command->info('Info table seeded!');

        $this->call(ExercisesTableSeeder::class);
        $this->command->info('Exercises table seeded!');

        $this->call(RoutinesTableSeeder::class);
        $this->command->info('Routines table seeded!');

        $this->call(SessionsTableSeeder::class);
        $this->command->info('Sessions table seeded!');

        $this->call(SessionRoutineTableSeeder::class);
        $this->command->info('WeekDays table seeded!');

        $this->call(ExercisesSessionsTableSeeder::class);
        $this->command->info('ExercisesSessions table seeded!');
    }
}
