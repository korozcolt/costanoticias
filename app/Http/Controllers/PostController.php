<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function show(){
        return view('admin.posts');
    }

    public function create(){
        return view('admin.createpost');
    }

    public function store(Request $request){
        $slug = Str::slug($request->title, '-');
    }

    public function update(Request $request, $id){

    }

    public function destroy($id){

    }

    public function searchSlug($slug){

    }

}
