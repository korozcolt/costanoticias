<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(){
        $slug = Str::slug('Your Awesome Blog Title', '-');
        return view('welcome');
    }

    public function searchSlug($slug){

    }

}
