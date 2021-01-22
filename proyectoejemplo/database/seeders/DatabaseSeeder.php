<?php

namespace Database\Seeders;

use \App\Models\User;
use \App\Models\Course;
use \App\Models\UserCourse;
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
        User::factory(10)->create();
        Course::factory(12)->create();
        UserCourse::factory(5)->create();
    }
}
