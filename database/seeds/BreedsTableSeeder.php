<?php

use Illuminate\Database\Seeder;
use Purr\Models\Breed;

class BreedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $breeds = ['Domestic', 'Persian', 'Siamese', 'Abyssinian'];

        foreach ($breeds as $breed) {
            Breed::create(['name' => $breed]);
        }
    }
}
