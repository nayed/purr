<?php

use Illuminate\Database\Seeder;
use Purr\Models\Cat;

class CatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach(range(1, 10) as $index)
        {
            Cat::create([
                'name' => $faker->firstName,
                'date_of_birth' => $faker->dateTimeThisDecade($max = 'now'),
                'breed_id' => rand(1, 4)
            ]);
        }
    }
}
