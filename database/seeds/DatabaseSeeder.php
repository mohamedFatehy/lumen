<?php

use App\Category;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $faker = Faker\Factory::create();
            Category::create([
                'name' => $faker->name,
                'description' => $faker->paragraph,
            ]);
        }
    }
}
