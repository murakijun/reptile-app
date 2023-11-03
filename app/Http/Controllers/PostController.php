<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Cloudinary;

class PostController extends Controller
{
    public function index(Post $post){
        //return view('posts.index')->with(['posts' => $post->get()]);
        //return view('posts.index')->with(['posts' => $post->getByLimit()]);
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    
    public function create(){
        return view('posts.create');
    }
    //
    public function store(Request $request, Post $post)
    {
        
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        
        $user = auth()->user();
        $input = $request['post'];
        
        if($request->file('image')){ //画像ファイルが送られた時だけ処理が実行される
            $image = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $input += ['image' => $image];
        }
        
        $input['user_id'] = $user->id;
        //$input['tag_id'] = 1;
        $tag = new Tag();
        $tag_input = $request['tag'];
        $tag->fill($tag_input)->save();
        $input['tag_id'] = $tag->id;
        
        $post->fill($input)->save();
        
        return redirect('/posts/' . $post->id);
    }
    
    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
     //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
}
