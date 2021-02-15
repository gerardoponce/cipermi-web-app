<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->unique()->words($nb = 3, $asText = true),
            'descripcion' => $this->faker->text($maxNbChars = 200),
            'icono_portada' => "https://via.placeholder.com/640x480.png/",// $this->faker->imageUrl($width = 640, $height = 480),
            'alt_icono_portada' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'video_demostracion' => "https://via.placeholder.com/1080x720png/",// $this->faker->imageUrl($width = 1080, $height = 720),
            'video_descripcion' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
        ];
    }
}
