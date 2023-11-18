<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posting>
 */
class PostingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => User::inRandomOrder()
                ->where('role', UserRole::Employer)
                ->first()->id,
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraphs(3, true),
            'budget' => $this->faker->numberBetween(1, 9) * 10_000,
        ];
    }
}
