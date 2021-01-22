<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=> $this->faker->unique()->randomElement($array = array('dbd','tbd','edeco','sistope','admin','metodos','progra','eda','peradigmas','calculo 1','orga','redes','fingeso')),
            'descripcion'=> $this->faker->randomElement($array = array('El mejor ramo','Se pasa con 4','Se pasa en PA','ya te lo echaste','comodín fijo')),
            'nivel'=> $this->faker->numberBetween($min = 1, $max = 9)
        ];
    }
}
