<?php

namespace Database\Factories;

use App\Models\Dosen;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dosen>
 */
class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Dosen::Class;
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'mata_kuliah' => $this->faker->unique->word(),
            'umur' => $this->faker->age(),
        ];
    }
}
