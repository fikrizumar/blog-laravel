<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = "blog";
    protected $fillable = ['title','kategori_id', 'slug', 'image', 'konten'];

    public function categories(){
        
        return $this->belongsTo('App\Models\Kategori', 'kategori_id');
    }
}
