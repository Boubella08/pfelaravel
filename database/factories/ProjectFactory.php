<?php

namespace Database\Factories;

use App\Models\Organisme;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'CodeOrg' => function () {
                return Organisme::factory()->create()->id;
            },
            'Nom' => $this->faker->name(),
            'Description' => $this->faker->paragraph,
            'Date_debut' => $this->faker->date(),
            'Date_fin' => $this->faker->date(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
