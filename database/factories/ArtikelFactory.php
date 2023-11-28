<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artikel>
 */
class ArtikelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(mt_rand(6, 12)),
            'game_id' => mt_rand(1,3),
            'slug' => fake()->slug(),
            'excerpt' => implode("\n\n", fake()->paragraphs(2)),
            'body' => collect(fake()->paragraphs(mt_rand(5, 10)))
            ->map(fn($p) => "<p>$p</p>")->implode(''),
            'published_at' => fake()->date()
        ];
    }
}
