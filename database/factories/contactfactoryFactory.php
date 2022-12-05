<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class contactfactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        return [
           'first_name'=>$this->faker->FirstName(),
           'last_name'=>$this->faker->LasttName(),
           'phone'=>$this->faker->Phone(),
           'email'=>$this->faker->Email(),
           'address'=>$this->faker->Address(),
           'company_id'=>Company::pluck('id')->random(),
        //    'user_id'=>User::factory()

            //
        ];
    }
}
