<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Kategori;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        return view('index',[
            'data_blog' => Blog::all(),
            'data_kategori' => Kategori::all(),
        ]);
    }

    public function kategori(Kategori $kategori){

        $blog = $kategori->blog()->get();

        return $blog;
    }
}
