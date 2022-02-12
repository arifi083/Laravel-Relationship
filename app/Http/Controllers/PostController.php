<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function postStore(){
        $post = [
            [
                 "user_id" => 1,
                 "title" => 'i love programming'
            ],
             [
                 "user_id" => 2,
                 "title" => 'i love laravel'
            ],
            [
                "user_id" => 2,
                "title" => 'i love vue js'
           ],
           
            
        ];
        Post::insert($post);
        return "post are created successfully";
    }

    public function Post_view(){
        $posts = Post::with('user')->get();
        return view('post.index',compact('posts'));
    }

    public function post_has_view(){
        $users = User::with('posts')->get();
        return view('hasmany.index',compact('users'));
    }
}
