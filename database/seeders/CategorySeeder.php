<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
            'color' => 'green',
        ]);
        Category::create([
            'name' => 'Laravel',
            'slug' => 'laravel',
            'color' => 'red',
        ]);
        Category::create([
            'name' => 'ReactJS',
            'slug' => 'reactjs',
            'color' => 'blue',
        ]);
        Category::create([
            'name' => 'Mechine Learning',
            'slug' => 'mechine-learning',
            'color' => 'lime',
        ]);
        Category::create([
            'name' => 'TailwindCSS',
            'slug' => 'tailwindcss',
            'color' => 'yellow',
        ]);
    }
}
