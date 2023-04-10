<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
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
