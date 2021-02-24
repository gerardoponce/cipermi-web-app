<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        $image = "img/app/image-640x480.png";
    
        $imagePath = asset('storage/' . $image);

        return [
            'codigo' => $this->faker->uuid(),
            'nombre' => $this->faker->unique()->words($nb = 3, $asText = true),
            'descripcion' => $this->faker->text($maxNbChars = 200),
            'stock' => rand(0, 200),
            'imagen_portada' => $imagePath,// $this->faker->imageUrl($width = 640, $height = 480),
            'alt_imagen_portada' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
        ];
    }
}
