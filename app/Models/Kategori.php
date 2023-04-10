<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = "kategori";
    protected $fillable = ['name'];


    public function getRouteKeyName()
    {
        // fungsi ini untuk mendefinisikan id ke slug
        return 'slug';
    }

    public function blogs(){

        return $this->hasMany('App\Models\Blog', 'kategori_id');
    }
    
}
