<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function store(Request $request){

        $create = ['name' => $request->kategori];

        $coba = Kategori::create($create);

        if ($coba) {
            return back();
        }
        
    }
}
