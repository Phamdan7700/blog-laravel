<?php

namespace Database\Factories;

use App\Models\TypeOfNews;
use Illuminate\Database\Eloquent\Factories\Factory;

class TypeOfNewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TypeOfNews::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'order' => $this->faker->randomDigit,
            'status' => $this->faker->boolean,
            'category_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
