<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\User;
use App\Models\Post;


class PostTagController extends Controller
{
    public function tagStore(){
        $tag = [
            [
               
                 "name" => 'PHP'
            ],
             [
               
                 "name" => 'LARAVEL'
            ],
            [
              
                "name" => 'javascript'
           ],
           
            
        ];
        Tag::insert($tag);
        return "tag created successfully";
    }

    public function attach(){
        //$tag = Tag::first();
        //$post = Post::first();
        //$post->tags()->attach($tag);
       //$post = Post::with('tags')->first();
        //dd($post);
        //$post->tags()->attach([2,3,4]);
        //$post->tags()->detach([2]);

        $posts = Post::with(['tags','user'])->get();
        return view('post.index',compact('posts'));

    }

    public function tags(){
        $tags = Tag::with('posts')->get();
        return view('tags.index',compact('tags'));
    }
}
