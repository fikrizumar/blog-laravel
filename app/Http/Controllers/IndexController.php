<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        return view('index',[
            'data_blog' => Blog::all()
        ]);
    }
}