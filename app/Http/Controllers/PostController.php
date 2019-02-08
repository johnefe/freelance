<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function show(Post $post){

        $post->load([
            'category'=>function($q){
                $q->select('id','name');
            },
            'goals'=> function($q){
                $q->select('id','post_id','goal');
            },
            'level'=> function($q){
                $q->select('id','name');
            },
            'requirements'=> function($q){
                $q->select('id','post_id','requiriment');
            },
            'reviews.user',
            'freelance'
        ])->get();
        $related = $post->relatedPosts();

           // dd($related);
        return view('trabajo.detalle-trabajo', compact('post','related'));
    }

    public function inscribe(Post $post){
        dd($post);
    }
}
