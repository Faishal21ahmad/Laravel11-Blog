<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CategorySeeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programming',
        // ]);

        // Post::create([
        //     'title' => 'Belajar Laravel',
        //     'slug' => 'belajar-laravel',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'body' => 'Belajar Laravel dari dasar hingga mahir, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium error ipsum adipisci sequi architecto dolorem, fugiat amet, iure eveniet consectetur laborum natus magni odio illo consequuntur, quae laboriosam et alias neque esse quod nobis quidem explicabo provident? Quas maxime modi et culpa possimus illum unde dolorum accusantium eligendi sed! Nisi deserunt fugit, ex repudiandae vel doloribus enim sit iure odio dignissimos nesciunt, excepturi expedita! Quas quod corporis molestias ipsam in tempora sapiente vitae error. Recusandae quam, autem eveniet enim doloremque beatae quibusdam, at quasi eius atque alias laudantium voluptatem dolorem qui laboriosam magnam officiis ducimus dicta repellendus quisquam. Tenetur, nam!',
        //     'published_at' => now(),
        // ]);

        $this->call([CategorySeeder::class, UserSeeder::class]);

        Post::factory(100)->recycle([
            Category::all(),
            User::all(),
        ])->create();
 











    }
}

