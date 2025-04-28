<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class PostController extends Controller
{
    //一覧ページ
    public function index(){
        $posts = Auth::user()->posts()->orderBy('created_at', 'desc')->get();

        return view('posts.index',compact('posts'));
    }

    public function show(Post $post){
        return view('posts.show',compact('post'));
    }
}
