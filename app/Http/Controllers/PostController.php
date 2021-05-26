<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('welcome');
    }

    public function show(){
        $posts = Post::paginate(5);
        return view('admin.posts',compact('posts'));
    }

    public function create(){
        $categories = Category::all();
        return view('admin.createpost',compact('categories'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|unique:posts',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
            'category' => 'required',
            'author' => 'required'
        ]);
        $slug = Str::slug($request->title, '-');
        $originalImage = $request->file('image');
        $imageName = $slug.'.'.$originalImage->extension();  
        $originalImage->storeAs('public/images', $imageName);
        
        $done = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category,
            'slug' => $slug,
            'image' => $imageName,
            'author' => $request->author
        ]);
        
        return redirect()->route('show')
            ->with('success', 'Articulo agregado satisfactoriamente');
    }

    public function edit($id){
        $post = Post::findOrFail($id);
        $categories = Category::all();

        return view('admin.updatepost',compact('post', 'categories'));
    }

    public function update(Request $request, $id){

    }

    public function destroy($id){
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('show')
        ->with('success', 'Articulo borrado satisfactoriamente');;
    }

    public function searchSlug($slug){

    }

}
