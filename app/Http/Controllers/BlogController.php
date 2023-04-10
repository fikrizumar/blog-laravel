<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create(){
        return view('user.create_blog',[
            'data_kategori' => Kategori::all(),
        ]);
    }

    public function store(Request $request){

        // dd(auth()->user());
        $request->validate([
            'judul' => 'required',
            // 'slug' => 'required',
            // 'writer' => 'required',
            'gambar' => 'required',
            'konten' => 'required',
        ]);

        $tambah = [
            // memasukkan postingan user sesuai id nya
            // 'user_id' => auth()->id(),
            'kategori_id'=>$request->kategori_id,
            // 'writer'=> $request->writer,
            'title'=> $request->judul,
            'slug'=> \Str::slug($request->judul),
            'image'=> $request->gambar,
            'konten'=> $request->konten,
        ];

        // menambahkan postingan blog sesuai user yang login
        $create =auth()->user()->blogs()->create($tambah);

        // dd($create);
        if ($create) {
            return back();
        }
        
            
    }
}
