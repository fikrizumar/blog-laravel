<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Blog::create([
            'user_id' => 1,
            'kategori_id' => 1,
            'title' => 'Programmer Handal',
            'slug' => 'programmer-handal',
            'image' => 'prg.jpg',
            'konten'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis illo eius voluptatibus saepe dignissimos est iure officia sapiente quod doloribus.',
            
        ]);

        Blog::create([
            'user_id' => 2,
            'kategori_id' => 2,
            'title' => 'Teknologi Cepat',
            'slug' => 'teknologi-cepat',
            'image' => 'tek.jpg',
            'konten'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis illo eius voluptatibus saepe dignissimos est iure officia sapiente quod doloribus.',

        ]);
        Blog::create([
            'user_id' => 1,
            'kategori_id' => 1,
            'title' => 'Senang Coding',
            'slug' => 'senang-coding',
            'image' => 'sen.jpg',
            'konten'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis illo eius voluptatibus saepe dignissimos est iure officia sapiente quod doloribus.',

        ]);
    }
}
