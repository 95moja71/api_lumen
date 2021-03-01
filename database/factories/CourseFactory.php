<?php

namespace Database\Factories;


use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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

            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(5),
            'price' => $this->faker->numberBetween(1000, 10000),
            'image' => $this->faker->imageUrl(),

        ];
    }
}
