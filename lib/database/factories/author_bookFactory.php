<?php

namespace Database\Factories;

use App\Models\author_book;
use Illuminate\Database\Eloquent\Factories\Factory;

class author_bookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = author_book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'book_id'=>$this->faker->numberBetween(1,30),
            'author_id'=>$this->faker->numberBetween(1,30)
        ];
    }
}
