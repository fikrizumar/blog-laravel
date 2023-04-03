<?php

namespace App\Http\Controllers;

use App\Models\BLog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create(){
        return view('user.create_blog');
    }

    public function store(Request $request){
        $request->validate([
            'category_id',
            'judul' => 'required',
            'slug' => 'required',
            'gambar' => 'required',
            'konten' => 'required',
        ]);

        $tambah = [
            'category_id'=>$request->category_id,
            'title'=> $request->judul,
            'slug'=> $request->slug,
            'image'=> $request->gambar,
            'konten'=> $request->konten,
        ];

        $create =Blog::create($tambah);

        if ($create) {

            return back();
        }
        

    }
}
