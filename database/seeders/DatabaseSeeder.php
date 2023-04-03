<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Kategori;
use App\Models\Blog;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Blog::create([
            'category_id' => 1,
            'title' => 'Programmer Handal',
            'slug' => 'programmer-handal',
            'image' => 'prg.jpg',
            'konten'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis illo eius voluptatibus saepe dignissimos est iure officia sapiente quod doloribus.',
            
        ]);

        Blog::create([
            'category_id' => 2,
            'title' => 'Teknologi Cepat',
            'slug' => 'teknologi-cepat',
            'image' => 'tek.jpg',
            'konten'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis illo eius voluptatibus saepe dignissimos est iure officia sapiente quod doloribus.',

        ]);
        Blog::create([
            'category_id' => 1,
            'title' => 'Senang Coding',
            'slug' => 'senang-coding',
            'image' => 'sen.jpg',
            'konten'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis illo eius voluptatibus saepe dignissimos est iure officia sapiente quod doloribus.',

        ]);

        Kategori::create([
            'name' => 'Programmer',
            'slug' => 'programmer'
        ]);

        Kategori::create([
            'name' => 'Teknologi',
            'slug' => 'teknologi'
        ]);

        Kategori::create([
            'name' => 'Developer',
            'slug' => 'developer'
        ]);
    }
}
