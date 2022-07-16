<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Flaower',
            'description' => 'awsawsawsaws',
            'image' => 'hhhhhhhhhh',
        ]);
        Category::create([
            'name' => 'hathim',
            'description' => 'hahahah',
            'image' => 'hhhhhhhhhh',
        ]);
        Category::create([
            'name' => 'shaifa',
            'description' => 'aaaaaaaaaaaaaaaa',
            'image' => 'hhhhhhhhhh',
        ]);
    }
}
