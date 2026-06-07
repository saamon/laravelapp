<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'isbn' => $this->faker->isbn13(),
            'title' => $this->faker->word(),
            'price' => $this->faker->numberBetween(2000, 5000),
            'publisher' => $this->faker->randomElement(
                [
                    'SBクリエイティブ', '技術評論者', '翔泳社', '日経BP', '森北出版',
                ]
            ),
            'published' => $this->faker->dateTimeBetween('-5 years', 'now'),
            'sample' => $this->faker->boolean(),
        ];
    }

    public function sample(): static
    {
        return $this->state(fn (array $attributes): array => [
            'sample' => true,
        ]);
    }
}
