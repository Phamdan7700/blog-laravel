<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'slug' => $this->faker->slug,
            'sumary' => $this->faker->text,
            'img_url' => $this->faker->url,
            'content' => $this->faker->text,
            'count_view' => $this->faker->randomDigit,
            'hightlight' => $this->faker->boolean,
            'order' => $this->faker->randomDigit,
            'status' => $this->faker->boolean,
            'user_id' => $this->faker->numberBetween(1, 10),
            'type_of_news_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
