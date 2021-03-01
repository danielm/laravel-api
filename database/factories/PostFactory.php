<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $post_date = $this->faker->dateTimeBetween('-1 year');

        return [
            'title'   => $this->faker->sentence,
            'slug'    => $this->faker->slug,
            'content' => $this->faker->text(1600),
            'user_id' => \App\Models\User::all()->random(),
            'created_at' => $post_date,
            'updated_at' => $post_date
        ];
    }
}
