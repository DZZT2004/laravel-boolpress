<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tags = [
            'veneto', 'macchina', 'autobus', 'supermercato', 'roma', 'informatica', 'laravel'
        ];

        foreach ($tags as $tag) {
            Tag::create([
                'slug' => Str::slug($tag),
                'name' => $tag
            ]);
        }
    }
}
