<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $image = 'img/app/image-640x480.png';
    
        $url = Storage::disk('public')->url($image);

        return [
            'codigo' => 'PD' . $this->faker->unique()->randomDigitNotNull(),
            'nombre' => $this->faker->unique()->words($nb = 3, $asText = true),
            'descripcion' => $this->faker->text($maxNbChars = 200),
            'stock' => rand(0, 200),
            'imagen_portada' => $url,// $this->faker->imageUrl($width = 640, $height = 480),
            'alt_imagen_portada' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
        ];
    }
}
