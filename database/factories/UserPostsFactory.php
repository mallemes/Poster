<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UserPosts;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserPosts>
 */
class UserPostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = UserPosts::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'author_id' => User::get()->random()->id,
            'content' => $this->faker->text(),
            'file' => $this->faker->imageUrl(640, 480, 'cats'),
            'is_published' => $this->faker->boolean(),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
