<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => "Even Vågen",
            'email' => "evenvagen@gmail.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$ouK3Wl8Clluk/WgwmfPfa.j/FGhOBHxQgFntTErE4YbF3iA2YAhaC', //eplekake
            'remember_token' => Str::random(10),
        ];
    }
}
