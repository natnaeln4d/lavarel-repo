<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Faker\Generator as aker;

class companySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact=[];
        $faker=Faker::create();
        foreach(range(1,30) as $index){
            $contact[]=[
                'first_name'=>$faker->first_name,
                'last_name'=>$faker->last_name,
                'phone'=>$faker->phone,
                'email'=>$faker->email,
                'address'=>$faker->address,
                'company_id'=>Company::factory()


                
                // 'first_name'=>$first_name="$index first_name",
                // 'last_name'=>$last_name="$index last_name",
                // 'phone'=>$phone="$index phone",
                // 'email'=>$email="$index email",
                // 'address'=>$address="$index address",
                // 'company_id'=>Company::factory()


            ];
            DB::table('contacts')->insert($contact);
        }
       
    }
}
