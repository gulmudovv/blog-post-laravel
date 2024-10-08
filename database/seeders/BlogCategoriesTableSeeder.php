<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [];
        $catName = 'Без категории';
        $categories[] = [
            'title' => $catName,
            'slug' => Str::slug($catName),
            'parent_id' => 0,
        ];

        for ($i = 1; $i <= 10; $i++) {
            $catName = 'Категория #'.$i;
            $parentId = ($i > 4) ? rand(1, 4) : 1;

            $categories[] = [
                'title' => $catName,
                'slug' => Str::slug($catName),
                'parent_id' => $parentId,
            ];
        }

        DB::table('blog_categories')->insert($categories);
    }
}
