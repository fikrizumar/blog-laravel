<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blog';
    protected $fillable = ['title','kategori_id', 'slug', 'image', 'konten'];

    public function categories(){
        
        // belongsto ini untuk mengambil data kategori dari tabel kategori
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function writer(){
        return $this->belongsTo(User::class,'user_id' );
    }
}
