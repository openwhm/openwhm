<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\User;
use Filament\Jetstream\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Team>
 */
class TeamFactory extends Factory
{
    protected $model = Team::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->company(),
            'user_id' => User::factory(),
            'personal_team' => true,
        ];
    }
}
