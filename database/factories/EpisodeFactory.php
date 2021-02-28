<?php

namespace Database\Factories;

use App\Models\Episode;
use Illuminate\Database\Eloquent\Factories\Factory;

class EpisodeFactory extends Factory
{

    protected $model = Episode::class;


    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(5),
            'videoUrl' => 'https://www.quirksmode.org/html5/videos/big_buck_bunny.mp4',
        ];
    }
}
