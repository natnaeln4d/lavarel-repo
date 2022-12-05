<?php

namespace Database\Factories;
use App\Models\Company;
use App\Models\Contact;
use App\Models\User;
use Faker\Generator as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ComnpanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->company(),
            'address'=>$this->faker->address(),
            'website'=>$this->faker->domainName(),
            'email'=>$this->faker->email(),
            // 'user_id'=>User::factory()
        ];
    }
}
