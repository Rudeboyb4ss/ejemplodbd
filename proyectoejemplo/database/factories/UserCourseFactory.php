<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Course;
use App\Models\UserCourse;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserCourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserCourse::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_user' => User::all()->random()->id,
            'id_courses' => Course::all()->random()->id,
        ];
    }
}
