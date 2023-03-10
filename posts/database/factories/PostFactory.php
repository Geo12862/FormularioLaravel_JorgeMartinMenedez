<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use SebastianBergmann\Type\TrueType;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Tha name of the factory's corresponding model.
     * 
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(), 
            'extracto' => $this->faker->paragraph(), 
            'contenido' => $this->faker->paragraph(),
            'caducable' => $this->faker->randomElement([false, true]),
            'comentable' => $this->faker->randomElement([false, true]),
            'acceso' => $this->faker->randomElement(['Privado', 'Público'])
        ];
    }
}
