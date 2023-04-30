<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $sku = 'SKU' . ($this->faker->unique()->randomNumber(6));

        return [
            // 'name' => $names[$this->faker->unique()->numberBetween(0, 4)],
            'cover' => null,
            'name' => $this->faker->name,
            'price' => $this->faker->randomFloat(2, 10, 100),
            'sku' => $sku,
            'weight' => $this->faker->numberBetween(30, 800),
        ];
    }
}
