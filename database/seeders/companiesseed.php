<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class companiesseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('companies')->truncate();
        $companies=[];
        $faker=Faker::create();
        foreach(range(1,10) as $index){
            $companies[]=[
                'name'=>$faker->company(),
                'address'=>$faker->address(),
                'website'=>$faker->domainName(),
                'updated_at'=>now(),
                'created_at'=>now(),

                // 'name'=>$name="name $index",
                // 'address'=>$name="address $index",
                // 'website'=>$name="wesite $index",
                // 'date modified'=>now(),
                // 'date updated'=>now(),
            ];
        }
        DB::table('companies')->insert($companies);
    }
}
