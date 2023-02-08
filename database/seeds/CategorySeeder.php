<?php

use App\Category;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $Faker)
    {
        $categories = [
            'Sport',
            'Scuola',
            'Cinema',
            'Vacanze',
            'Tecnologia',
            'Cucina',
            'Economia'
        ];

        foreach ($categories as $category) {
            Category::create([
                'slug' => Str::slug($category),
                'name' => $category,
                'description' => $Faker->paragraph(rand(1, 6), true),
            ]);
        }
    }
}
