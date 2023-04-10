<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Kategori;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        return view('index',[
            // latest ini untuk memfilter postingan yang terbaru
            'data_blog' => Blog::latest()->get()->all(),
            'data_kategori' => Kategori::all(),
        ]);
    }

    public function kategori(Kategori $kategori){

        return view('index-kategori',[
            'data_kategori' => Kategori::all(),
            'data_blog' => $kategori->blogs,
        ]);

    }

    public function view(){}
}
